<div class="intext">
<?php
if( $lang=="fr")
{
?>
   <div class="titre">vtkKinship : Extension de la bibliothèque VTK</div>
   <p>
   <a href="http://www.vtk.org" target="_blank" class="externallink">VTK</a>, bien que orientée visualisation, offre une architecture de traitement de donnée (type "pipeline") extensible. Il suffit d'écrire des algorithmes (dérivés de vtkAlgorithm, on ne peut plus simple !) pour pouvoir les enchainer aux sources et autres sorties de visualisations. <a href="http://github.com/jeromevelut/vtkKinship" target="_blank" class="externallink">vtkKinship</a> est prévue pour accueillir de nouveaux algorithmes et leurs plugin ParaView.
<?php
}
else
{
?>      
   <div class="titre">vtkKinship: Extensions for the VTK library</div>
   <p>
   <a href="http://www.vtk.org" target="_blank" class="externallink">VTK</a>, although being designed for visualisation purpose, offers a pipeline-styled framework. Extensions take the form of vtkAlgorithm inherited classes. <a href="http://github.com/jeromevelut/vtkKinship" target="_blank" class="externallink">vtkKinship</a> will be an external container of new VTK filters/sources and their ParaView plugins.
   <p>
<div class="contact">
   <div class="titre">
Example: vtkDeformableMesh<p>
<video src="./img/bluntfin_anim.ogg" controls="controls" autoplay="autoplay">
Your browser does not support the video tag
</video><br>
<a href="./img/bluntfin_anim.avi" target="_blank" class="externallink">(Video .avi here (~6MB)</a>
<p>
<video src="./img/bluntfin_anim3.ogg" controls="controls" autoplay="autoplay">
Your browser does not support the video tag
</video><br>
<a href="./img/bluntfin_anim3.avi" target="_blank" class="externallink">(Video .avi here (~60MB)</a>
   </div>
</div>

<?php
}
?>
</div>
