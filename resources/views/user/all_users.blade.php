@extends('app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <table class="table table-border"> 
            <th>id</th>
            <th>email</th>
            <th>Created Time</th>
            <th>Action</th>
            <th>Edit</th>
            <?php foreach ($users as $user) { ?>


                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->created_at; ?></td>
                    <td><a href="/delete/<?php echo $user->id; ?>">Delete</a></td>
                    <td><a href="/update/<?php echo $user->id; ?>">Update</a></td>
                    
                </tr>

            <?php } ?>
        </table>
    </div>
</div>

@endsection