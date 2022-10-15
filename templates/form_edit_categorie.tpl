{include file = 'header.tpl'}

<form action="update_position" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <h1>¿Que cambio harias?</h1>

            <div class="form-group">
                <input name="id" type="hidden" class="form-control" value="{$position->position_id}" required>
                <label class="name" value="{$position->position}" required>Posicion</label>
                <input name="position" type="text" class="form-control">
                <button type="submit" class="btn btn-primary mt-2">Modificar posicion</button>

            </div>
        </div>

{include file = 'footer.tpl'}