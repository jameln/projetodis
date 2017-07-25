function initMapVendorRegiter() {
	if (!jQuery().vectorMap) {
		return;
	}

	var showMap = function(name) {
		jQuery('.vmaps').hide();
		jQuery('#vmap_' + name).show();
	}

	var setMap = function(name) {
		var map = jQuery('#vmap_' + name);
		
		if (map.size() !== 1) {
			return;
		}

		var data = {
			map: 'world_en',
			backgroundColor: null,
			borderColor: '#2e75b6',
			borderOpacity: 0.5,
			borderWidth: 1,
			color: '#c6c6c6',
			enableZoom: true,
			hoverColor: '#45a7eb',
			hoverOpacity: null,
			values: sample_data,
			normalizeFunction: 'linear',
			scaleColors: ['#cccccc', '#909cae'],
			selectedColor: '#45a7eb',
			multiSelectRegion : true,
			selectedRegion: null,
			showTooltip: true,
			onLabelShow: function(event, label, code) {

			},
			onRegionOver: function(event, code) {
				if (code == 'ca') {
					event.preventDefault();
				}
			},
			onRegionDeselect: function(element, code, region) {
				$("#administrator_"+code.toUpperCase()).remove();
			},
			onRegionClick: function(element, code, region) {
				var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
				console.log(message);
				
				var htmlFormAmin =  "<div id='administrator_"+code.toUpperCase()+"'>"+
										"<h3 class='form-section' style='color: #e7505a'>"+ region +" Administrator <a style='float: right' href='javascript:;' onclick='deleteAdmin(\""+code+"\")' class=' btn red btn-outline btn-sm'><i class='fa fa-trash'></i> Delete </a></h3>"+
										"<div class='form-group form-md-line-input'>"+
											"<label class='col-md-4 control-label' for='administrator_name_"+code.toUpperCase()+"'>Name Administrator"+
												"<span class='required'> * </span>"+
											"</label>"+
											"<div class='col-md-6'>"+
												"<input type='text' class='form-control' id='administrator_name_"+code.toUpperCase()+"' placeholder='Enter Name Administrator' required>"+
												"<div class='form-control-focus'> </div>"+
											"</div>"+
										"</div>"+
										"<div class='form-group form-md-line-input'>"+
											"<label class='col-md-4 control-label' for='administrator_mail_"+code.toUpperCase()+"'>Mail Administrator"+
												"<span class='required'> * </span>"+
											"</label>"+
											"<div class='col-md-6'>"+
												"<input type='mail' class='form-control' id='administrator_mail_"+code.toUpperCase()+"' placeholder='Enter mail Administrator' required>"+
												"<div class='form-control-focus'> </div>"+
											"</div>"+
										"</div>"+
									"</div>";
				if($("#administrator_"+code.toUpperCase()).length == 0 ){
					$("#add_administrator_form").append(htmlFormAmin);
				}
				
				
				
			}
		};

		data.map = name + '_en';
	  
		map.width(map.parent().parent().width());
		map.show();
		map.vectorMap(data);
		map.hide();
	}

	setMap("world");
	setMap("usa");
	setMap("europe");
	setMap("russia");
	setMap("germany");
	showMap("world");

	jQuery('#map_vendor_register_world').click(function() {
		showMap("world");
	});

	jQuery('#map_vendor_register_usa').click(function() {
		showMap("usa");
	});

	jQuery('#map_vendor_register_europe').click(function() {
		showMap("europe");
	});
	jQuery('#map_vendor_register_russia').click(function() {
		showMap("russia");
	});
	jQuery('#map_vendor_register_germany').click(function() {
		showMap("germany");
	});

	$('#map_vendor_register_loading').hide();
	$('#map_vendor_register_content').show();

	App.addResizeHandler(function() {
		jQuery('.vmaps').each(function() {
			var map = jQuery(this);
			map.width(map.parent().width());
		});
	});
}
