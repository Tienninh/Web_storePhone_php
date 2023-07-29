<!-- bam vao hien luoon trang dau tien  -->
<?php 
if($current_page_tn > 3){
    $first_page_tn = 1;
?>
    <a class="list_page" href="?per_page_tn=<?=$item_per_page_tn?>&page_tn=<?=$first_page_tn?>"><?=$first_page?></a>

<?php }?>
<!-- tro laij trang truoc -->
<?php 
if($current_page_tn > 1){
    $prev_page_tn = $current_page_tn -1;
    $prev_page_tn = 'Prev';
?>
        <a class="list_page end" href="?per_page_tn=<?=$item_per_page_tn?>&page_tn=<?=$prev_page_tn?>"><?=$prev_page_tn?></a>


<?php }?>
<?php for($num = 1; $num <= $totalPages_tn; $num++){?>

    <?php if($num != $current_page_tn){?>
        <?php if($num > $current_page_tn-3 && $num < $current_page_tn+3){?>
        <a class="list_page" href="?per_page_tn=<?=$item_per_page_tn?>&page_tn=<?=$num?>"><?=$num?></a>
    <?php }?>
    <?php } 
    else{?>
        <strong><?=$num?></strong>
    <?php }?>

<?php }?>
<!-- Tien len trang sau -->
<?php 
if($current_page_tn < $totalPages_tn -1){
    $next_page_tn = $current_page_tn + 1;
    $next_page_tn = 'Next';
?>
        <a class="list_page end" href="?per_page_tn=<?=$item_per_page_tn?>&page_tn=<?=$next_page_tn?>"><?=$next_page_tn?></a>

<?php }?>

<!-- in ra trang cuoi cung -->

<?php 
if($current_page_tn < $totalPages_tn - 3){
    $end_page_tn = $totalPages_tn;
?>

<a class="list_page" href="?per_page_tn=<?=$item_per_page_tn?>&page_tn=<?=$end_page_tn?>"><?=$end_page_tn?></a>


<?php }?>

<style>

    .list_page{
        border: 1px solid black;
    font-size: 20px;
    /* magin-right: 21px; */
    padding:0 4px;
    text-decoration: none;
    }



    strong{
        border: 1px solid black;
    padding:0 4px;
        /* padding */
        background-color: black;
        color:white;
    font-size: 20px;
    }

    .end{
        background-color: white;
        color:black;
    }

    .end :hover{
        background-color: rgb(39, 155, 39);
        color: white;
    }
</style>

