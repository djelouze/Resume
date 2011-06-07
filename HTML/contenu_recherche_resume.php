<?php
if( $lang=="fr")
{
?>
   <div class="titre">Résumé</div>
   <p>
   La segmentation d'image par modèles déformables est une méthode permettant de localiser les frontières d'un objet. Dans le cas d'images difficiles à segmenter en raison de la présence de bruit ou d'un manque d'information, l'introduction de connaissance a priori dans le modèle déformable améliore la segmentation. Ces cas difficiles sont fréquents dans l'imagerie du vivant, où les applications peuvent concerner le traitement d'une grande quantité de donnée. Il est alors nécessaire d'utiliser une méthode de traitement robuste et rapide.
   <p>
   Cette problématique nous a amené à proposer une régularisation locale du modèle déformable. Pour ce faire, nous reprenons le concept du contour actif en proposant un nouveau schéma de régularisation. Celle-ci est désormais effectuée via un filtrage RII des déplacements à chaque itération. Le filtre est basé sur un noyau de spline lissante dont le but, à l'origine, était d'approcher un ensemble de points par une fonction continue plutôt que d'interpoler exactement ces points.
   <p>
   Nous mettons en avant, dans cette méthode de régularisation, la concision du paramètre de régularisation : il s'agit d'une valeur &lambda, réelle et positive, qui influe sur la fréquence de coupure du filtre passe-bas. Une relation analytique existant entre &lambda, la fréquence de coupure et la fréquence d'échantillonnage, il est possible de donner un sens métrique à la fréquence de coupure. De plus, nous pouvons affecter une valeur &lambda différente en chaque point du contour par une variation des coefficients du filtre et ainsi permettre une régularisation locale du contour actif.
   <p>
   La généralisation de cette nouvelle méthode de régularisation pour des modèles déformables surfaciques est proposée. La difficulté principale concerne la connectivité du maillage, contrainte à une valence 4 partout par le filtrage bidimensionnel. Des résultats de segmentation sont donnés pour de tels maillages ainsi que pour des maillages sphériques où un traitement particulier des pôles est mis en oeuvre.
<?php
}
else
{
?>      
   <div class="titre">Abstract</div>
   <p>
   
   Image segmentation through deformable models is a method that localizes object boundaries. When difficult segmentation context are proposed because of noise or a lack of information, the use of prior knowledge in the deformation process increases segmentation accuracy. Medical imaging is often concerned by these context. Moreover, medical applications deal with large amounts of data. Then it is mandatory to use a robust and fast processing.
<p>   
   This question lead us to a local regularisation of the deformable model. Highly based on the active contour framework, also known as \emph{snake}, we propose a new regularization scheme. This is done by filtering the displacements at each iteration. The filter is based on a smoothing spline kernel whose aim was to approximate a set of points rather than interpolating it.
<p>   
   We point out the consistency of the regularization parameter in such a method. It deals with a real, positive &lambda value that tunes the cut-off frequency of a low-pass filter. As it is possible to link analytically the cut-off frequency and the sampling frequency, one may give a metric meaning to this cut-off frequency. Moreover a different &lambda value should be set at each point through a variation of the filter's coefficients. It induces a local cut-off frequency and a local regularization.
<p>   
   This new regularization method should be applied to surfaces. The main difficulty concerns the connectivity of the surface mesh. It has to be 4-valenced everywhere due to the bidimensionnal fashion of the filter. Segmentation results are given for such meshes. A special process of singular points on spherical mesh is proposed.
<?php
}
?>
