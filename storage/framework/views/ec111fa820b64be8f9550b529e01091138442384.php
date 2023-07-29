<?php $__env->startSection('title', 'Akreditasi Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Akreditasi',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
    }
    .timeline:before {
    top: 0;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 3px;
    background-color: #eeeeee;
    left: 50%;
    margin-left: -1.5px;
    }
    .timeline > li {
    margin-bottom: 20px;
    position: relative;
    }
    .timeline > li:before,
    .timeline > li:after {
    content: " ";
    display: table;
    }
    .timeline > li:after {
    clear: both;
    }
    .timeline > li:before,
    .timeline > li:after {
    content: " ";
    display: table;
    }
    .timeline > li:after {
    clear: both;
    }
    .timeline > li > .timeline-panel {
    width: 50%;
    float: left;
    border: 1px solid #d4d4d4;
    border-radius: 2px;
    padding: 20px;
    position: relative;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    }
    .timeline > li.timeline-inverted + li:not(.timeline-inverted),
    .timeline > li:not(.timeline-inverted) + li.timeline-inverted {
    margin-top: -60px;
    }

    .timeline > li:not(.timeline-inverted) {
    padding-right:90px;
    }

    .timeline > li.timeline-inverted {
    padding-left:90px;
    }
    .timeline > li > .timeline-panel:before {
    position: absolute;
    top: 26px;
    right: -15px;
    display: inline-block;
    border-top: 15px solid transparent;
    border-left: 15px solid #ccc;
    border-right: 0 solid #ccc;
    border-bottom: 15px solid transparent;
    content: " ";
    }
    .timeline > li > .timeline-panel:after {
    position: absolute;
    top: 27px;
    right: -14px;
    display: inline-block;
    border-top: 14px solid transparent;
    border-left: 14px solid #fff;
    border-right: 0 solid #fff;
    border-bottom: 14px solid transparent;
    content: " ";
    }
    .timeline > li > .timeline-badge {
    color: #fff;
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
    text-align: center;
    position: absolute;
    top: 16px;
    left: 50%;
    margin-left: -25px;
    background-color: #999999;
    z-index: 100;
    border-top-right-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;
    }
    .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
    }
    .timeline > li.timeline-inverted > .timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
    }
    .timeline > li.timeline-inverted > .timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto;
    }
    .timeline-badge.primary {
    background-color: #2e6da4 !important;
    }
    .timeline-badge.success {
    background-color: #3f903f !important;
    }
    .timeline-badge.warning {
    background-color: #f0ad4e !important;
    }
    .timeline-badge.danger {
    background-color: #d9534f !important;
    }
    .timeline-badge.info {
    background-color: #5bc0de !important;
    }
    .timeline-title {
    margin-top: 0;
    color: inherit;
    }
    .timeline-body > p,
    .timeline-body > ul {
    margin-bottom: 0;
    }
    .timeline-body > p + p {
    margin-top: 5px;
    }
</style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="container">
    <div class="page-header">
        
    </div>
    <ul class="timeline">
        <?php $__currentLoopData = $list_akreditasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $akreditasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="timeline">
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img src="" alt="">
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\resources\views/home/akademik/akreditasi.blade.php ENDPATH**/ ?>