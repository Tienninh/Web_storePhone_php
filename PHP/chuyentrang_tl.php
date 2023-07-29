<!-- bam vao hien luoon trang dau tien  -->
<?php 
if($current_page_tl > 3){
    $first_page_tl = 1;
?>
    <a class="list_page" href="?per_page_tl=<?=$item_per_page_tl?>&page_tl=<?=$first_page_tl?>"><?=$first_page?></a>

<?php }?>
<!-- tro laij trang truoc -->
<?php 
if($current_page_tl > 1){
    $prev_page_tl = $current_page_tl -1;
    $prev_page_tl = 'Prev';
?>
        <a class="list_page end" href="?per_page_tl=<?=$item_per_page_tl?>&page_tl=<?=$prev_page_tl?>"><?=$prev_page_tl?></a>


<?php }?>
<?php for($num = 1; $num <= $totalPages_tl; $num++){?>

    <?php if($num != $current_page_tl){?>
        <?php if($num > $current_page_tl-3 && $num < $current_page_tl+3){?>
        <a class="list_page" href="?per_page_tl=<?=$item_per_page_tl?>&page_tl=<?=$num?>"><?=$num?></a>
    <?php }?>
    <?php } 
    else{?>
        <strong><?=$num?></strong>
    <?php }?>

<?php }?>
<!-- Tien len trang sau -->
<?php 
if($current_page_tl < $totalPages_tl -1){
    $next_page_tl = $current_page_tl + 1;
    $next_page_tl = 'Next';
?>
        <a class="list_page end" href="?per_page_tl=<?=$item_per_page_tl?>&page_tl=<?=$next_page_tl?>"><?=$next_page_tl?></a>

<?php }?>

<!-- in ra trang cuoi cung -->

<?php 
if($current_page_tl < $totalPages_tl - 3){
    $end_page_tl = $totalPages_tl;
?>

<a class="list_page" href="?per_page_tl=<?=$item_per_page_tl?>&page_tl=<?=$end_page_tl?>"><?=$end_page_tl?></a>


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

