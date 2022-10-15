{include file = 'header.tpl'}


<h1> Que cambio harias en la lista? </h1>
<form action="update" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <input name="id" type="hidden" class="form-control" value="{$player->id}">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" value="{$player->nombre}" required>
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Posicion</label>
                <select name="position" class="form-control" required>
                    <option value="11" {if $player->position == 11} selected {/if}>Arquero</option>
                    <option value="12" {if $player->position == 12} selected {/if}>Defensor</option>
                    <option value="13" {if $player->position == 13} selected {/if}>Mediocampista</option>
                    <option value="14" {if $player->position == 14} selected {/if}>Extremo</option>
                    <option value="15" {if $player->position == 15} selected {/if}>Delantero</option>
                </select>
            </div>
        </div>
    </div>

    <div class="col-9">
        <label>Equipo</label>
        <input name="team" type="text" class="form-control" value="{$player->team}" required>
    </div>
    <div class=" col-3">
        <label>Liga</label>
        <select name="league" class="form-control" rows="3" required>
            <option value="Liga BBVA" {if $player->league == "Liga BBVA"} selected {/if}>Liga BBVA</option>
            <option value="Serie A" {if $player->league == "Serie A"} selected {/if}>Serie A</option>
            <option value="Premier League" {if $player->league == "Premier League"} selected {/if}>Premier League
            </option>
            <option value="Bundesliga" {if $player->league == "Bundesliga"} selected {/if}>Bundelisga</option>
            <option value="Liga Portuguesa" {if $player->league == "Liga Portuguesa"} selected {/if}>Liga Portuguesa
            </option>
            <option value="Eredivisie" {if $player->league == "Eredivisie"} selected {/if}>Eredivisie</option>
            <option value="Superliga Argentina" {if $player->league == "Superliga Argentina"} selected {/if}>Superliga
                Argentina</option>
            <option value="Otra" {if $player->league == "Otra"} selected {/if}>Otra</option>
            <option value="Ligue 1" {if $player->league == "Liga 1"} selected {/if}>Ligue 1</option>


        </select>
    </div>

    <button type="submit" class="btn btn-primary mt-2"> Agregar Cambios </button>
</form>
{include file = 'footer.tpl'}