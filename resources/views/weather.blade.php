<!DOCTYPE html>
<html>
  <head>
    <title>DigitalDrift</title>
  </head>

  <body>
    <table  border="1">
      
        
      
      @foreach($locations as $location)
        <tr>
          <td colspan="4">{{$location['locationName']}}</td>
        </tr>
        <tr>
          <td>       </td>
          <td>數值說明</td>
          <td>開始時間</td>
          <td>結束時間</td>
        </tr>
        
        @foreach($location['weatherElement'] as $weatherElement) 
          <tr>
            <td rowspan="3">{{$weatherElement['elementName']}}</td>          
          @foreach($weatherElement['time'] as $time)
              @switch($weatherElement['elementName'])
                @case('Wx')
                  <td>{{$time['parameter']['parameterName']}} {{$time['parameter']['parameterValue']}}</td>
                  @break
                @case('PoP')
                  <td>{{$time['parameter']['parameterName']}} {{$time['parameter']['parameterUnit']}}</td>
                  @break
                @case('MinT')
                  <td>{{$time['parameter']['parameterName']}} {{$time['parameter']['parameterUnit']}}</td>
                  @break
                @case('CI')
                  <td>{{$time['parameter']['parameterName']}}</td>
                  @break
                @case('MaxT')
                  <td>{{$time['parameter']['parameterName']}} {{$time['parameter']['parameterUnit']}}</td>
                  @break
              @endswitch
              <td>{{$time['startTime']}}</td>
              <td>{{$time['endTime']}}</td>
            </tr>
          @endforeach
        @endforeach
      @endforeach
      
      
    </table>
  </body>
</html>