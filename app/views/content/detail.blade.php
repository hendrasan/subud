@extends('layouts.master')

@section('content')
  <div class="container main-container">
    <div class="row row-no-padding content-content">
      <div class="col-xs-8 content-left-container">
        <div class="topic-item-container">
          <div class="topic-body copy-mono">
            <div class="inner">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Qui-vere falsone, quaerere mittimus-dicitur oculis se privasse; Illa argumenta propria videamus, cur omnia sint paria peccata. Aliter enim nosmet ipsos nosse non possumus. Fortitudinis quaedam praecepta sunt ac paene leges, quae effeminari virum vetant in dolore. Cur post Tarentum ad Archytam? Duo Reges: constructio interrete. Cur igitur, inquam, res tam dissimiles eodem nomine appellas? </p>
           
              <p>Si verbum sequimur, primum longius verbum praepositum quam bonum. Omnes enim iucundum motum, quo sensus hilaretur. Quamquam te quidem video minime esse deterritum. Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Qui autem esse poteris, nisi te amor ipse ceperit? </p>

              <p>Aliter enim nosmet ipsos nosse non possumus. Neminem videbis ita laudatum, ut artifex callidus comparandarum voluptatum diceretur. Sed id ne cogitari quidem potest quale sit, ut non repugnet ipsum sibi. Haec quo modo conveniant, non sane intellego. </p>

              <p>Hunc vos beatum; Ut proverbia non nulla veriora sint quam vestra dogmata. Quamquam haec quidem praeposita recte et reiecta dicere licebit. </p>

              <p>Quis tibi ergo istud dabit praeter Pyrrhonem, Aristonem eorumve similes, quos tu non probas? Si alia sentit, inquam, alia loquitur, numquam intellegam quid sentiat; Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Est enim tanti philosophi tamque nobilis audacter sua decreta defendere. Facile est hoc cernere in primis puerorum aetatulis. Parvi enim primo ortu sic iacent, tamquam omnino sine animo sint. </p>
            </div>
          </div>
          <div class="modal-caller-container">
            <img src="{{ assets_url('images/btn-enlarge.png') }}" class="modal-caller" alt="book" data-toggle="modal" data-target="#js-topic-item-1">

            <div class="modal topic-modal fade" id="js-topic-item-1" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                  
                  <div class="topic-body copy-mono">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Qui-vere falsone, quaerere mittimus-dicitur oculis se privasse; Illa argumenta propria videamus, cur omnia sint paria peccata. Aliter enim nosmet ipsos nosse non possumus. Fortitudinis quaedam praecepta sunt ac paene leges, quae effeminari virum vetant in dolore. Cur post Tarentum ad Archytam? Duo Reges: constructio interrete. Cur igitur, inquam, res tam dissimiles eodem nomine appellas? </p>

                    <p>Si verbum sequimur, primum longius verbum praepositum quam bonum. Omnes enim iucundum motum, quo sensus hilaretur. Quamquam te quidem video minime esse deterritum. Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Qui autem esse poteris, nisi te amor ipse ceperit? </p>

                    <p>Aliter enim nosmet ipsos nosse non possumus. Neminem videbis ita laudatum, ut artifex callidus comparandarum voluptatum diceretur. Sed id ne cogitari quidem potest quale sit, ut non repugnet ipsum sibi. Haec quo modo conveniant, non sane intellego. </p>

                    <p>Hunc vos beatum; Ut proverbia non nulla veriora sint quam vestra dogmata. Quamquam haec quidem praeposita recte et reiecta dicere licebit. </p>

                    <p>Quis tibi ergo istud dabit praeter Pyrrhonem, Aristonem eorumve similes, quos tu non probas? Si alia sentit, inquam, alia loquitur, numquam intellegam quid sentiat; Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? Est enim tanti philosophi tamque nobilis audacter sua decreta defendere. Facile est hoc cernere in primis puerorum aetatulis. Parvi enim primo ortu sic iacent, tamquam omnino sine animo sint. </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
      <div class="col-xs-4 content-right-container">
        @include('_partials.content-menu')

        <ul class="topic-list topic-list-with-id">
          <li class="topic-item">
            <h3>Aim</h3>
            <ul class="title-list">
              <li class="title"><a href="#">Aim, Khusus <span class="item-meta-id">RAH023ENG</span></a></li>
            </ul>
          </li>
        </ul>
        <a href="{{ URL::previous() }}" class="return-btn">Kembali Ke Depan</a>
      </div>
    </div>
  </div>

@stop