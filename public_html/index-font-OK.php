<?php include('header.php') ?>
<?php include('data.php') ?>
<?php include('template.php') ?>



<div id=calendar data-year="<?= date('Y')?>" data-month="<?= date('m')?>"> 
   <div id="header">
        <?= date('Y')?>/<?= date('m')?>
   </div>
   <div id="days" class="clearfix">
        <div class="day">SUN</div>
        <div class="day">MON</div>
        <div class="day">TUE</div>
        <div class="day">WED</div>
        <div class="day">THU</div>
        <div class="day">FRI</div>
        <div class="day">SAT</div>      
   </div>
   <div id="dates" class="clearfix">
        <?php foreach ($date as $key => $date):?>
            <div class="date-block <?= (is_null($date))? 'empty':''?>" data-date="<?=$date?>">
                <div class="date"><?= $date ?></div>
                <div class="events">
                    <div class="event clearfix" data-id="..." >
                        <div class="title">title</div>
                        <div class="from">10:00</div>
                    </div>
                </div>
            </div>
        <?php endforeach?>

   </div>



</div>

<div id="info-panel" class="new">
    <div class="close">X</div>

    <form>
        <div class="title">
            <label for=""> event</label><br>
            <input type="text" name="title">
        </div>
        <div class="time-picker">
            <div class="select-date">
                <span class="month"></span>/<span class="date"></span>
                <input type="hidden" name="year">
                <input type="hidden" name="month">
                <input type="hidden" name="date">                 
            </div>
            <div class="from">
                <label for="from">form</label><br>
                <input type="time" name="start-time" id="from">

            </div>
            <div class="to">
            <label for="to">to</label><br>
                <input type="time" name="end-time" id="to">

            </div>
        </div>
        <div class="description">
            <label>description</label><br>
            <textarea name="description" id="description" ></textarea>
        </div>
    </form>
    

    <div class="buttoms">
        <button class="create">create</button>
        <button class="update">update</button>
        <button class="cancel">cancel</button>
        <button class="delete">delete</button>
        <!-- create  create / cancel-->
        <!-- update  update / cancel/delete-->
    </div>
</div>



<? include('footer.php')?>
