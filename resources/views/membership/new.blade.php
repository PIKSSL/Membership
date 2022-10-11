
<form action="/api/memberships" , method="post">
    {{csrf_field()}}
    {{method_field('POST')}}
    <label for="user_id">user_id:</label>
    <select id="user_id">
        @foreach ($users as $user)
        <option>{{$user->id}}</option>
        @endforeach
    </select>
    <label for="club_id">club_id:</label>
    <select id="club_id">
        @foreach ($clubs as $club)
        <option>{{$club->id}}</option>
        @endforeach
    </select>
    <input type="submit" value="Submit">
</form>