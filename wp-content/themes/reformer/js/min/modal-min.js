jQuery(function(){jQuery("#modal-1").on("change",function(){jQuery(this).is(":checked")?jQuery("body").addClass("modal-open"):jQuery("body").removeClass("modal-open")}),jQuery(".modal-fade-screen, .modal-close").on("click",function(){jQuery(".modal-state:checked").prop("checked",!1).change()}),jQuery(".modal-inner").on("click",function(e){e.stopPropagation()})});