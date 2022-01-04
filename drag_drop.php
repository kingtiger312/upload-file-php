<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>File Upload</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles -->
    <link href="styles.css" rel="stylesheet">
</head>

<body>

    <main role="main" class="container">
        <p class="lead mb-4 text-center alert alert-info">
            Allow to upload file type only jpg,jpeg,png,gif,pdf,docx. File size limit 10MB.
        </p>
        <!-- <div class="alert alert-danger errors" role="alert">
        </div> -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <input type="text" name="newfolder" id="newfolder" class="form-control" placeholder="Enter folder name."/>
                </div>
                <!-- Our markup, the important part here! -->
                <div id="drag-and-drop-zone" class="dm-uploader p-5" >
                    <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3>

                    <div class="btn btn-primary btn-block mb-5" onclick="ui_click_dropzone();">
                        <span >Open the file Browser</span>
                        <input type="file" title='Click to add Files' class="d-none" id="selectfile"  accept=".docx, .pdf, .jpg, .png, .gif, jpeg" />
                    </div>
                </div>
                <!-- /uploader -->

            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card h-100">
                    <div class="card-header">
                        File List
                    </div>

                    <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
                        <li class="text-muted text-center empty">No files uploaded.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /file list -->


    </main>
    <!-- /container -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="uploader.js"></script>
    <script src="ui.js"></script>
    <script src="config.js"></script>
    <!-- File item template -->
    <script type="text/html" id="files-template">
        <li class="media">
            <div class="media-body mb-1">
                <p class="mb-2">
                    <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
                </p>
                <div class="progress mb-2">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <hr class="mt-1 mb-1" />
            </div>
        </li>
    </script>
</body>

</html>