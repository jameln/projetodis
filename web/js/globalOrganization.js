var odis_global_organization = Object.create(Object.prototype, {
create:{
value:
    function(data){
        var $ = go.GraphObject.make;
        myDiagram =
                $(go.Diagram, "myDiagramDiv", // must be the ID or reference to div
                {
                initialContentAlignment: go.Spot.Center,
                        maxSelectionCount: 1, // users can select only one part at a time
                        validCycle: go.Diagram.CycleDestinationTree, // make sure users can only create trees
                        /*"clickCreatingTool.archetypeNodeData": {}, // allow double-click in background to create a new node
                         "clickCreatingTool.insertPart": function(loc) {  // customize the data for the new node
                         this.archetypeNodeData = {
                         key: getNextKey(), // assign the key based on the number of nodes
                         name: "(new person)",
                         title: ""
                         };
                         return go.ClickCreatingTool.prototype.insertPart.call(this, loc);
                         },*/
                        layout:
                        $(go.TreeLayout,
                        {
                        treeStyle: go.TreeLayout.StyleLastParents,
                                arrangement: go.TreeLayout.ArrangementHorizontal,
                                // properties for most of the tree:
                                angle: 90,
                                layerSpacing: 35,
                                // properties for the "last parents":
                                alternateAngle: 90,
                                alternateLayerSpacing: 35,
                                alternateAlignment: go.TreeLayout.AlignmentBus,
                                alternateNodeSpacing: 20
                        }),
                        "undoManager.isEnabled": true // enable undo & redo
                });
        
        var levelColors = ["#AC193D", "#2672EC", "#8C0095", "#5133AB",
        "#008299", "#D24726", "#008A00", "#094AB2"];
        // override TreeLayout.commitNodes to also modify the background brush based on the tree depth level
        myDiagram.layout.commitNodes = function() {
        go.TreeLayout.prototype.commitNodes.call(myDiagram.layout); // do the standard behavior
                // then go through all of the vertexes and set their corresponding node's Shape.fill
                // to a brush dependent on the TreeVertex.level value
                myDiagram.layout.network.vertexes.each(function(v) {
                if (v.node) {
                var level = v.level % (levelColors.length);
                        var color = levelColors[level];
                        var shape = v.node.findObject("SHAPE");
                        if (shape) shape.fill = $(go.Brush, "Linear", { 0: color, 1: go.Brush.lightenBy(color, 0.05), start: go.Spot.Left, end: go.Spot.Right });
                }
                });
        };
        var nodeIdCounter = - 1; // use a sequence to guarantee key uniqueness as we add/remove/modify nodes
        // define the Node template
        myDiagram.nodeTemplate =
        $(go.Node, "Auto",
                //{ doubleClick: odis_global_organization.nodeDoubleClick },
                { // handle dragging a Node onto a Node to (maybe) change the reporting relationship
                /*mouseDragEnter: function (e, node, prev) {
                 var diagram = node.diagram;
                 var selnode = diagram.selection.first();
                 if (!mayWorkFor(selnode, node)) return;
                 var shape = node.findObject("SHAPE");
                 if (shape) {
                 shape._prevFill = shape.fill;  // remember the original brush
                 shape.fill = "darkred";
                 }
                 },*/
                /*mouseDragLeave: function (e, node, next) {
                 var shape = node.findObject("SHAPE");
                 if (shape && shape._prevFill) {
                 shape.fill = shape._prevFill;  // restore the original brush
                 }
                 },*/
                /*mouseDrop: function (e, node) {
                 var diagram = node.diagram;
                 var selnode = diagram.selection.first();  // assume just one Node in selection
                 if (mayWorkFor(selnode, node)) {
                 // find any existing link into the selected node
                 var link = selnode.findTreeParentLink();
                 if (link !== null) {  // reconnect any existing link
                 link.fromNode = node;
                 } else {  // else create a new link
                 diagram.toolManager.linkingTool.insertLink(node, node.port, selnode, selnode.port);
                 }
                 }
                 }*/
                },
                // for sorting, have the Node.text be the data.name
                new go.Binding("text", "name"),
                // bind the Part.layerName to control the Node's layer depending on whether it isSelected
                new go.Binding("layerName", "isSelected", function(sel) { return sel ? "Foreground" : ""; }).ofObject(),
                // define the node's outer shape
                $(go.Shape, "Rectangle",
                {
                name: "SHAPE", fill: "white", stroke: null,
                        // set the port properties:
                        portId: "", fromLinkable: true, toLinkable: true, cursor: "pointer"
                }),
                $(go.Panel, "Horizontal",
                        $(go.Picture,
                        {
                        name: "Picture",
                                desiredSize: new go.Size(39, 50),
                                margin: new go.Margin(6, 8, 6, 10),
                        },
                                new go.Binding("source", "key", odis_global_organization.findHeadShot)),
                        // define the panel where the text will appear
                        $(go.Panel, "Table",
                        {
                        maxSize: new go.Size(150, 999),
                                margin: new go.Margin(6, 10, 0, 3),
                                defaultAlignment: go.Spot.Left
                        },
                                $(go.RowColumnDefinition, { column: 2, width: 4 }),
                                $(go.TextBlock, odis_global_organization.textStyle(), // the name
                                {
                                row: 0, column: 0, columnSpan: 5,
                                        font: "12pt Segoe UI,sans-serif",
                                        editable: true, isMultiline: false,
                                        minSize: new go.Size(10, 16)
                                },
                                        new go.Binding("text", "name").makeTwoWay()),
                                $(go.TextBlock, "Title: ", odis_global_organization.textStyle(),
                                { row: 1, column: 0 }),
                                $(go.TextBlock, odis_global_organization.textStyle(),
                                {
                                row: 1, column: 1, columnSpan: 4,
                                        editable: true, isMultiline: false,
                                        minSize: new go.Size(10, 14),
                                        margin: new go.Margin(0, 0, 0, 3)
                                },
                                        new go.Binding("text", "title").makeTwoWay()),
                                $(go.TextBlock, odis_global_organization.textStyle(),
                                { row: 2, column: 0 },
                                        new go.Binding("text", "key", function(v) {return "ID: " + v; })),
                                $(go.TextBlock, odis_global_organization.textStyle(),
                                { name: "boss", row: 2, column: 3, }, // we include a name so we can access this TextBlock when deleting Nodes/Links
                                        new go.Binding("text", "parent", function(v) {return "Boss: " + v; })),
                                $(go.TextBlock, odis_global_organization.textStyle(), // the comments
                                {
                                row: 3, column: 0, columnSpan: 5,
                                        font: "italic 9pt sans-serif",
                                        wrap: go.TextBlock.WrapFit,
                                        editable: true, // by default newlines are allowed
                                        minSize: new go.Size(10, 14)
                                },
                                        new go.Binding("text", "comments").makeTwoWay())
                                )  // end Table Panel
                        ) // end Horizontal Panel
                ); // end Node

        // the context menu allows users to make a position vacant,
        // remove a role and reassign the subtree, or remove a department
        myDiagram.nodeTemplate.contextMenu =
        $(go.Adornment, "Vertical",
                /*$("ContextMenuButton",
                 $(go.TextBlock, "Vacate Position"),
                 {
                 click: function(e, obj) {
                 var node = obj.part.adornedPart;
                 if (node !== null) {
                 var thisemp = node.data;
                 myDiagram.startTransaction("vacate");
                 // update the key, name, and comments
                 myDiagram.model.setKeyForNodeData(thisemp, getNextKey());
                 myDiagram.model.setDataProperty(thisemp, "name", "(Vacant)");
                 myDiagram.model.setDataProperty(thisemp, "comments", "");
                 myDiagram.commitTransaction("vacate");
                 }
                 }
                 }
                 ),
                 $("ContextMenuButton",
                 $(go.TextBlock, "Remove Role"),
                 {
                 click: function(e, obj) {
                 // reparent the subtree to this node's boss, then remove the node
                 var node = obj.part.adornedPart;
                 if (node !== null) {
                 myDiagram.startTransaction("reparent remove");
                 var chl = node.findTreeChildrenNodes();
                 // iterate through the children and set their parent key to our selected node's parent key
                 while(chl.next()) {
                 var emp = chl.value;
                 myDiagram.model.setParentKeyForNodeData(emp.data, node.findTreeParentNode().data.key);
                 }
                 // and now remove the selected node itself
                 myDiagram.model.removeNodeData(node.data);
                 myDiagram.commitTransaction("reparent remove");
                 }
                 }
                 }
                 ),
                 $("ContextMenuButton",
                 $(go.TextBlock, "Remove Department"),
                 {
                 click: function(e, obj) {
                 // remove the whole subtree, including the node itself
                 var node = obj.part.adornedPart;
                 if (node !== null) {
                 myDiagram.startTransaction("remove dept");
                 myDiagram.removeParts(node.findTreeParts());
                 myDiagram.commitTransaction("remove dept");
                 }
                 }
                 }
                 )*/
                );
        // define the Link template
        myDiagram.linkTemplate =
        $(go.Link, go.Link.Orthogonal,
        { corner: 5, relinkableFrom: true, relinkableTo: true },
                $(go.Shape, { strokeWidth: 4, stroke: "#00a4a4" })); // the link shape

        // read in the JSON-format data from the "mySavedModel" element
        odis_global_organization.load(data);
        // support editing the properties of the selected person in HTML
        if (window.Inspector) myInspector = new Inspector("myInspector", myDiagram,
{
properties: {
"key": { readOnly: true },
        "comments": {}
}
});
}},
        // when a node is double-clicked, add a child to it
        nodeDoubleClick:{
        value:
                function(e, obj){
                var clicked = obj.part;
                        if (clicked !== null) {
                var thisemp = clicked.data;
                        myDiagram.startTransaction("add employee");
                        var newemp = { key: getNextKey(), name: "(new person)", title: "", parent: thisemp.key };
                        myDiagram.model.addNodeData(newemp);
                        myDiagram.commitTransaction("add employee");
                }
                }
        },
        // this is used to determine feedback during drags
        mayWorkFor:{
        value:
                function(node1, node2){
                if (!(node1 instanceof go.Node)) return false; // must be a Node
                        if (node1 === node2) return false; // cannot work for yourself
                        if (node2.isInTreeOf(node1)) return false; // cannot work for someone who works for you
                        return true;
                }
        },
        // This function provides a common style for most of the TextBlocks.
        // Some of these values may be overridden in a particular TextBlock.
        textStyle:{
        value:
                function(){
                return { font: "9pt  Segoe UI,sans-serif", stroke: "white" };
                }
        },
        // This converter is used by the Picture.
        findHeadShot:{
        value:
                function(key){
                if (key < 0 || key > 16) return "images/HSnopic.png"; // There are only 16 images on the server
                        return "../images/HS" + key + ".png"
                }
        },
        // Show the diagram's model in JSON format
        save:{
        value:
                function(data){
                data = myDiagram.model.toJson();
                        myDiagram.isModified = false;
                }
        },
        load:{
        value:
                function(data){
                myDiagram.model = go.Model.fromJson(data);
                }
        }
});