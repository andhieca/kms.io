<?php
	session_start();
	if(($_SESSION['username']!="")){
	include "../../config/koneksi.php";
	include "../../config/navigasi.php";
    include "../../config/time_since.php";
    include_once('../../config/konversi_bulan.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KUD SARWA MUKTI - KESEHATAN HEWAN</title>

    <!-- Bootstrap core CSS -->

    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <link href="../../fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../../css/custom.css" rel="stylesheet">
    <!-- Data Tables -->
    <link href="../../css/icheck/flat/green.css" rel="stylesheet">
    <link href="../../css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="../../css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="../../css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="../../css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="../../css/switchery/switchery.min.css" />
    <script src="../../js/jquery.min.js"></script>
    <link href="../../js/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">

    
        <div class="main_container">

        	
		<?php 		 
				include("header.php");
				include("sidebar.php"); ?>
			<div class="right_col" role="main">

				
		<?php	
				navigasi();
                             	
				include("footer.php");
		
		?>
			</div>
        </div>

    </div>

<div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
</div>
         <script src="../../js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="../../js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="../../js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="../../js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="../../js/icheck/icheck.min.js"></script>
        <script src="../../js/custom.js"></script>
        <!-- input mask -->
        <script src="../../js/input_mask/jquery.inputmask.js"></script>
        <!-- Datatables -->
        <script src="../../js/datatables/js/jquery.dataTables.js"></script>
        <script src="../../js/datatables/tools/js/dataTables.tableTools.js"></script>
        <!-- select2 -->
        <script src="../../js/select/select2.full.js"></script>
        <!-- richtext editor -->
        <script src="../../js/editor/bootstrap-wysiwyg.js"></script>
        <script src="../../js/editor/external/jquery.hotkeys.js"></script>
        <script src="../../js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- form wizard -->
        <script type="text/javascript" src="../../js/wizard/jquery.smartWizard.js"></script>
        <script src="../../js/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
         <!-- image cropping -->
        <script src="../../js/cropping/cropper.min.js"></script>
        <script src="../../js/cropping/main.js"></script>

        <script src="../../js/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // Smart Wizard     
                $('#wizard').smartWizard();

                function onFinishCallback() {
                    $('#wizard').smartWizard('showMessage', 'Finish Clicked');
                    //alert('Finish Clicked');
                }
            });

            $(document).ready(function () {
                // Smart Wizard 
                $('#wizard_verticle').smartWizard({
                    transitionEffect: 'slide'
                });

            });
        </script>
        <script>
        var asInitVals = new Array();
        $(document).ready(function () {
        $("#example").dataTable({
                    "oLanguage": {
                        "sSearch": "pencarian:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': true,
                            'aTargets': [1]
                        } //disables sorting for column one
                    ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers"
                    //"dom": 'T<"clear">lfrtip',
                    
                });
            $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
       
        });
      

        </script>
    <!-- /datepicker -->
     <!-- input_mask -->
    <script>
        $(document).ready(function () {
            $(":input").inputmask();
        });
    </script>
    <!-- /input mask -->
  
    <script>
      $(document).on('change', '.btn-file :file', function() {
          var input = $(this),
              numFiles = input.get(0).files ? input.get(0).files.length : 1,
              label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
          input.trigger('fileselect', [numFiles, label]);
        });
        
        $(document).ready( function() {
            $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
                
                var input = $(this).parents('.input-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;
                
                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }
                
            });
        });
        </script>
        <script>
            document.getElementById("uploadBtn").onchange = function () {
            document.getElementById("uploadFile").value = this.value;
            };
        </script>
    <!-- /footer content -->
     <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
    <!-- /select2 -->
        <script type="text/javascript">
        //WYSIWYG
        $(function () {
           $(".textarea").wysihtml5();
          });
         </script>
   <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
</body>

</html>

<?php
}

else{
    header("Location:../../belum_login.php");
}
?>