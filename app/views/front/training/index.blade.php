@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="page-header">
        <a href="/training/request" class="pull-right btn btn-primary">Request for training</a>      
        <h1>Training</h1>
        <div class="clearfix"></div>
        <p>Lorem ipsum dolor</p>
    </div>  

    <p>Duo id adhuc aeque everti, vide mollis eu qui. Ne autem epicurei concludaturque usu, intellegam complectitur qui et. Enim nihil accommodare cum ut, mel id diceret scaevola intellegebat. Pri at facer meliore. Ad enim efficiantur vis, essent tibique vivendum ad his. Vix paulo mollis aperiri eu, mundi decore nominavi vis ex, in cum agam invenire delicatissimi.

Debet oporteat adipisci te pro. No enim rebum tamquam his. Utinam integre ad has. Has ea agam ignota. Ne elit atqui aeterno eum, sit in natum ubique.

Eam ex posse civibus, eum aeque gubergren at. Usu id quot eius natum, alia facer conclusionemque id per, est tollit libris postulant et. Nihil quando possim ut nec. Nec choro integre eu, no volumus legendos eam. Meis expetenda voluptaria his in, ferri vulputate qui in. Quando veritus usu no, vivendo oportere constituto in ius. Est homero salutandi id, ea eum summo feugait erroribus, cu eum omnis facete causae.

Pro ne nibh wisi debet, te debet sapientem intellegat vix. Facilisis gubergren appellantur an nec. Vel ea quas theophrastus, an primis perpetua omittantur mei. An has veri populo, quo conceptam pertinacia liberavisse ex.

Te pro sale choro labore. Mea te eros summo mandamus, sanctus appareat recusabo has ad. Ei labore adversarium vim. Ne causae invenire vix, altera alterum reformidans vix et. Pri ne velit movet.

Usu torquatos voluptatibus in. Ut graece delectus periculis sea. Ex vix alii purto referrentur. In amet nostro eam. Inani accumsan ocurreret duo at, ei vis quas antiopam incorrupte.

</p>

<div class="training-courses">
                <div class="container">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-title">Community based training program skills training to employment</h2>
                            </div><!--end of .panel-heading-->
                            <div class="panel-body">
                                <?php $i = 0; ?>
                                @foreach($courses as $course)
                                    <div class="col-xs-6">
                                        <ul class="list">
                                            <li><a href="/training/{{{ $course->id }}}/show">{{{ $course->title }}}</a></li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div><!--end of .panel-->
                    </div><!--end of .row-->
                </div><!--end of .container-->
            </div><!--end of .training-courses-->

</div>

@stop
