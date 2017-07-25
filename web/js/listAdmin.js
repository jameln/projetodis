var odis_list_admin = Object.create(Object.prototype, {
    _HtmlAdmin :{value: '<div class="col-md-4" style="margin-bottom: 15px" >'+
                            '<div class="mt-widget-1">'+
                                '<div class="mt-icon">'+
                                '</div>'+
                                '<div class="mt-img">'+
                                    '<img src="__imageAdmin__"> </div>'+
                                '<div class="mt-body">'+
                                    '<h3 class="mt-username">__nameAdmin__</h3>'+
                                    '<p class="mt-user-title"> __titleAdmin__ </p>'+
                                    '<div class="mt-stats">'+
                                        '<div class="btn-group btn-group btn-group-justified">'+
                                            '<a href="javascript:;" class="btn font-red" id="details___IDADMIN__">'+
                                                '<i class="icon-eye"></i> Show Details </a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'},
    _HtmlDropDownListAdmin: {value: '<li class=""><a href="#__IDADMIN__" tabindex="-1" data-toggle="tab" aria-expanded="false"> __ADMINNAME__ </a></li>'},
    _HtmlContentAdmin:{value: '<div class="tab-pane fade" id="__IDADMIN__"></div>'},
    _dataAdmin: {value: []},
    create:{
        value:
            function(data, idDiv){
                
                for(var i =0; i<data.length; i++){
                    var adminHtml = this._HtmlAdmin.replace(/__nameAdmin__/g, data[i].name)
                                                   .replace('__imageAdmin__', "../images/HS"+data[i].key+".png")
                                                   .replace(/__titleAdmin__/g, data[i].title)
                                                   .replace(/__IDADMIN__/g, data[i].key);
                    
                    $("#"+idDiv).append(adminHtml);
                    this._dataAdmin[data[i].key] = data[i];
                    $("#details_"+data[i].key).click(function() {
                        var id = this.id.replace(/details_/g, '')
                        odis_list_admin.showAdmin(odis_list_admin._dataAdmin[id]);
                      });
                }
            }
    },
    showAdmin:{
        value:
            function(data){
                if ( $( "#"+data.key ).length ) {
                    return;
                }
                var dropDownList = this._HtmlDropDownListAdmin.replace(/__IDADMIN__/g, data.key)
                                                         .replace(/__ADMINNAME__/g, data.name);
                var contentAdmin = this._HtmlContentAdmin.replace(/__IDADMIN__/g, data.key);
                $("#dropdownListAdmin").append(dropDownList);
                $("#tabContentAdmin").append(contentAdmin);
            }
    }
});