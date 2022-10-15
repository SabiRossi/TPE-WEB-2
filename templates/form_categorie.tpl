{if isset ($smarty.session.USER_ID)}
    <form action="add_position" method="POST" class="my-4">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label class="name">Posicion</label>
                    <input name="position" type="text" class="form-control">
                    <button type="submit" class="btn btn-primary mt-2">Agregar Posicion</button>
                </div>
            </div>
{{/if}}