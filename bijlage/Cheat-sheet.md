## Variabele

Variabele starten met een $ met daarachter een letter of liggendstreepje

```php
$getal =1;
$tekst = "Hallo wereld";
$boolean = true;
$array = ['ma'=>'maandag','di'=>'dinsdag','wo'=>'woensdag','do'=>'donderdag','vr'=>'vrijdag']; // key => value
```

## schrijven op scherm

op het scherm schrijven

```php
echo $getal;  //schrijft op het scherm: 1
echo $array['ma'];  //schrijft op het scherm: maandag
```

#### tussen HTML code

```php
    <h1><?php echo $tekst;?></h1>
```

of

```php
<h1><?= $tekst?></h1>
```

### Loop door een array

```php
$array = ['ma'=>'maandag','di'=>'dinsdag','wo'=>'woensdag','do'=>'donderdag','vr'=>'vrijdag']; // key => value

foreach ($array as $key => $value){
    echo $value;
}
```

#### tussen html code

```php
<?php
$dagen = ['ma'=>'maandag','di'=>'dinsdag','wo'=>'woensdag','do'=>'donderdag','vr'=>'vrijdag']; // key => value
?>
...
<label id="dag">Selecteer een dag</label>
<select id="dag" name="dag">
    <?php foreach ($dagen as $afkorting => $dag): ?>
        <option value="<?= $afkorting ?>"><?= $dag ?></option>
    <?php endforeach; ?>

</select>
```

### if-else

#### if-else in code

```php
if($error){
    //doe iets
}else{
   //doe iets anders
}
```

#### if-else tussen HTML

```php
<?php if($error):?>
    <p class="bg-red-600 text-white p-2">Let op er gaat iets fout <?=$error ?></p>
<?php else: ?>
    <p class="bg-green-600 text-white p-2">Het is succesvol gegaan</p>
<?php endif; ?>
```

### switch

```php
switch($test){
    case 1: 
        //doe dit ..
    break;
    case 2:
        //doe dat ...
    break;
    default:
        //indien anders dan...
}
```