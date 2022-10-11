@foreach ($memberships as $membership)
<form action="/api/$memberships/{{$membership->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <input type="submit" value="{{$membership->id}}">
    </div>
</form>
@endforeach