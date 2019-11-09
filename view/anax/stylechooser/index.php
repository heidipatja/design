<?php

namespace Anax\View;

/**
 * Style chooser.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());



?><h1>Styleväljare</h1>
<p>Här kan du välja mellan och aktivera olika style sheets.</p>
<form class="stylechooser" method="post" action="<?= url("style/update") ?>">
    <fieldset>
        <legend>Styleväljare</legend>
        <p>
            <label for="stylechooser">Välj en style för att aktivera den:<br>
                <select name="stylechooser" onchange="form.submit();">
                    <option value="none">Ingen style är vald, använder standardstylen.</option>
                    <?php foreach ($styles as $key => $value) :
                        $selected = $key === $activeStyle ? "selected=\"selected\"" : null;
                        ?>
                        <option <?= $selected ?> value="<?= $key ?>"><?= "[ $key ] - {$value["shortDescription"]}" ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
        </p>
        <?php if ($activeStyle) : ?>
            <p>Detaljer om stylen.</p>
            <table>
                <tr>
                    <th>Filnamn:</th>
                    <td><code><?= $activeStyle ?></code></td>
                </tr>
                <tr>
                    <th>Kort beskrivning:</th>
                    <td><?= $activeShortDescription ?></td>
                </tr>
                <tr>
                    <th>Lång beskrivning:</th>
                    <td><?= $activeLongDescription ?></td>
                </tr>
            </table>
        <?php endif; ?>
    </fieldset>
</form>
