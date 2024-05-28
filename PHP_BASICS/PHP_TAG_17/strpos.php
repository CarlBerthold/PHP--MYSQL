<?php


$text = "we Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends.";

//echo strpos($text, 'we'), PHP_EOL; // 224

while (strpos($text, 'we') !== false) {
    $pos = strpos($text, 'we');
    echo $pos, PHP_EOL;
    $text = substr($text, $pos + 1);
}

echo $text, PHP_EOL;	


$text = "Tränen herauf früh die herz gut trüben vom gut. Früh sehnen sich sich manche ihr der noch verklungen walten. Nicht.";


echo strpos($text, 'früh'); // 14 erwartet