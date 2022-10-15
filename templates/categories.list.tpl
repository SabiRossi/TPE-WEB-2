{include file = 'header.tpl'}
{include file = 'form_categorie.tpl'}

{if $error != null}
    <div class="alert alert-danger mt3">
        {$error}
    </div>
{/if}
<ul class="list-group">
    <h1>Posiciones</h1>
    {foreach from=$positions item=$position}

        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$position->position} </b> </span>
            <div class="ml-auto">
                {if isset ($smarty.session.USER_ID)}
                    <a href='delete_position/{$position->position_id}' type='button' class='btn btn-danger'>Borrar</a>

                    <a href='edit_position/{$position->position_id}' type='submit' class='btn btn-primary mt-2'>Editar</a>
                {/if}
            </div>

        </li>
    {/foreach}
</ul>

{include file = 'footer.tpl'}