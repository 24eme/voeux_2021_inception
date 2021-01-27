# Génération d'une vidéo d'image infinie

La génération se base sur deux images d'une même scène (`MH-GMT-JMV.xcf` et `image_000100_angle.xcf` non commités faute de place). Dans laquelle l'une a été intégrée dans l'autre.

Voici les étapes de sa confection :

1. Génération d'une image jpg en grande définition de la scène
2. Application d'une rotation progressive (`ffmpeg`)
3. Calcul du zoom progressif à appliquer pour retrouver une image dans la position initiale (via un script php `php/zoom_voeux.php`)
4. Pour avoir la dernière version de l'image en bonne définition, intégration d'une image de meilleure définition dans une des images générée (itération 100 ici)
5. Application d'une rotation progressive sur cette image (`ffmpeg`)
6. Calcul du zoom progressif sur cette image (via script `php/zoom_voeux_zoom.php`)
7. Mis en commun des images
8. Travail de post production manuel pour tenter de gérer des défauts de lumière
9. Génération de la vidéo finale (`ffmpeg`)

Le script `zoom_zoom.sh` permet de lancer ce qui est lançable automatiquement. Les étapes 1, 4 et 8 sont manuelles et réalisées avec `gimp`.

Pour éviter une sentiment d'accélération lors du zoom, il n'est fait de manière linéaire mais en log2. A partir de l'itération de 100, il redevient linéaire faute de meilleure solution.

Ce travail doit beaucoup au dépot [ffmpeg-animation-samples de ikorolev72](https://github.com/ikorolev72/ffmpeg-animation-samples).

Cette génération est utilisée notamment dans la page [24eme.fr/2021/](https://www.24eme.fr/2021/).
