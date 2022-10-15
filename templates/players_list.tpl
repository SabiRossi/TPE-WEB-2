{include file = "header.tpl"}

{include file = "form.tpl"}

{include file = "input.filter.tpl"}

{if $error != null}
    <div class="alert alert-danger mt3">
        {$error}
    </div>
{/if}
<!-- lista de tareas -->
<ul class="list-group">

    {foreach from=$players item=$player}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$player->nombre} </b>- {$player->position} </span>
            <div class="ml-auto">
                {if isset ($smarty.session.USER_ID)}
                    <a href='detail/{$player->id}' type='button' class='btn btn-primary mt-2'>Ver Detalle</a>
                    <a href='delete/{$player->id}' type='button' class='btn btn-danger'>Borrar</a>

                    <a href='edit/{$player->id}' type='submit' class='btn btn-primary mt-2'>Editar</a>

                {/if}
            </div>
        </li>
    {/foreach}
</ul>


{include file = "footer.tpl"}