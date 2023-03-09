@extends('admin_travel.layout.tampilan')
@section('/tambah','active')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
  
  <div id="smartwizard">
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="#step-1">
            <div class="num">1</div>
            Step Title
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#step-2">
            <span class="num">2</span>
            Step Title
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#step-3">
            <span class="num">3</span>
            Step Title
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#step-4">
            <span class="num">4</span>
            Step Title
          </a>
        </li>
    </ul>
 
    <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
            Step content
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
            Step content
        </div>
        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
            Step content
        </div>
        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
            Step content
        </div>
    </div>
 
    <!-- Include optional progressbar HTML -->
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>  
  <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
</body>
</html>
@endsection