{include file = 'header.tpl'}
<ul class="list-group">

    {foreach from=$players item=$player}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$player->nombre} </b> - {$player->position}- {$player->team} - {$player->league} </span>
            <div class="ml-auto">
                {if isset ($smarty.session.USER_ID)}
                    <a href='delete/{$player->id}' type='button' class='btn btn-danger'>Borrar</a>

                    <a href='edit/{$player->id}' type='submit' class='btn btn-primary mt-2'>Editar</a>
                {/if}

            </div>

        </li>
    {/foreach}
</ul>
{include file = 'footer.tpl'}