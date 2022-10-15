{if isset ($smarty.session.USER_ID)}
    <form action="add" method="POST" class="my-4">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label class="name">Nombre</label>
                    <input name="player" type="text" class="form-control">
                </div>
            </div>
        {{/if}}
        <div class="col-3">
            <div class="form-group">
                <label>Posicion</label>
                <select name="position" class="form-control">
                    {foreach from=$positions item=$position}
                        <option value="{$position->position_id}">{$position->position}</option>

                    {/foreach}
                </select>
                <a href='positions' type='button' class='btn btn-primary mt-2'>Ver Categorias</a>
            </div>

        </div>
    </div>
    {if isset ($smarty.session.USER_ID)}
        <div class="col-9">
            <label>Equipo</label>
            <textarea name="team" class="form-control" rows="3"></textarea>
        </div>

        <div class="col-3">
            <label>Liga</label>
            <select name="league" class="form-control" rows="3">
                <option value="Liga BBVA">Liga BBVA</option>
                <option value="Serie A">Serie A</option>
                <option value="Premier League">Premier League</option>
                <option value="Bundesliga">Bundelisga</option>
                <option value="Liga Portuguesa">Liga Portuguesa</option>
                <option value="Eredivisie">Eredivisie</option>
                <option value="Superliga Argentina">Superliga Argentina</option>
                <option value="Otra">Otra</option>
                <option value="Ligue 1">Ligue 1</option>


            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Agregar</button>

    </form>
{{/if}}