<!-- bam vao hien luoon trang dau tien  -->
<?php 
if($current_page > 3){
    $first_page = 1;
?>
    <a class="list_page" href="?per_page=<?=$item_per_page?>&page=<?=$first_page?>"><?=$first_page?></a>

<?php }?>
<!-- tro laij trang truoc -->
<?php 
if($current_page > 1){
    $prev_page = $current_page -1;
    $prev_page = 'Prev';
?>
        <a class="list_page end" href="?per_page=<?=$item_per_page?>&page=<?=$prev_page?>"><?=$prev_page?></a>


<?php }?>
<?php for($num = 1; $num <= $totalPages; $num++){?>

    <?php if($num != $current_page){?>
        <?php if($num > $current_page-3 && $num < $current_page+3){?>
        <a class="list_page" href="?per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
    <?php }?>
    <?php } 
    else{?>
        <strong><?=$num?></strong>
    <?php }?>

<?php }?>
<!-- Tien len trang sau -->
<?php 
if($current_page < $totalPages -1){
    $next_page = $current_page + 1;
    $next_page = 'Next';
?>
        <a class="list_page end" href="?per_page=<?=$item_per_page?>&page=<?=$next_page?>"><?=$next_page?></a>

<?php }?>

<!-- in ra trang cuoi cung -->

<?php 
if($current_page < $totalPages - 3){
    $end_page = $totalPages;
?>

<a class="list_page" href="?per_page=<?=$item_per_page?>&page=<?=$end_page?>"><?=$end_page?></a>


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

