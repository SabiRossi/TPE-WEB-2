<form action="filter" method="POST" class="my-4">
    <div class="col-3">
        <div class="form-group">
            <select name="filter" class="form-control">
                {foreach from=$positions item=$position}
                    <option value="{$position->position_id}">{$position->position}</option>

                {/foreach}
            </select>
            <button type=submit class='btn btn-primary mt-2'>Filtrar por Categoria</button>
        </div>
    </div>
</form>

{include file = 'footer.tpl'}