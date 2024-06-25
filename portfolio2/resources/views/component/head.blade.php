<meta charset="utf-8">
<title>{{$title}}</title>
<meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
<meta name="author" content="Vincent Garreau" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
@foreach($config['css'] as $key => $value)
<link href="{{asset($value)}}" rel="stylesheet">
@endforeach
@foreach($config['linkcss'] as $key => $value)
<link href="{{$value}}" rel="stylesheet">
@endforeach

@foreach($config['linkjs_head'] as $key => $value)
<script src={{$value}}></script>
@endforeach
<style>
  @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
</style>