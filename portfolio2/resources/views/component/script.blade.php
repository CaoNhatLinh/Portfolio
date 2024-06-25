 <!-- Mainly scripts -->


 @foreach($config['js'] as $key => $value)

 <script src="{{asset($value)}}"></script>

 @endforeach


 @foreach($config['linkjs'] as $key => $value)

 <script src={{$value}}></script>

 @endforeach
 <?php

  foreach ($config['script'] as $key => $value)
    echo  "<script> $value  </script>"
  ?>