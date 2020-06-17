<!DOCTYPE html>
<html>
  <head>
    <title>Title</title>
  </head>

  <body>
    @foreach($locations as $location)
      地點 - {{$location['locationName']}}
      @foreach($location['weatherElement'] as $weatherElement)
        {{$weatherElement['elementName']}}
        @foreach($weatherElement['time'] as $time)
          起始時間 - {{$time['startTime']}}
          結束時間 - {{$time['endTime']}}
          {{$time['parameter']['parameterName']}} 
          @switch($weatherElement['elementName'])
            @case('Wx')
              {{$time['parameter']['parameterValue']}} 
              @break
            @case('PoP')
              {{$time['parameter']['parameterUnit']}} 
              @break
            @case('MinT')
              {{$time['parameter']['parameterUnit']}} 
              @break
            @case('CI')
              @break
            @case('MaxT')
              {{$time['parameter']['parameterUnit']}} 
              @break
          @endswitch         
        @endforeach
      @endforeach
    @endforeach
  </body>
</html>