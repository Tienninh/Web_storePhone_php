<!-- bam vao hien luoon trang dau tien  -->
<?php 
if($current_page_mt > 3){
    $first_page_mt = 1;
?>
    <a class="list_page" href="?per_page_mt=<?=$item_per_page_mt?>&page_mt=<?=$first_page_mt?>"><?=$first_page?></a>

<?php }?>
<!-- tro laij trang truoc -->
<?php 
if($current_page_mt > 1){
    $prev_page_mt = $current_page_mt -1;
    $prev_page_mt = 'Prev';
?>
        <a class="list_page end" href="?per_page_mt=<?=$item_per_page_mt?>&page_mt=<?=$prev_page_mt?>"><?=$prev_page_mt?></a>


<?php }?>
<?php for($num = 1; $num <= $totalPages_mt; $num++){
        $current_pointer = ($num == $current_page_mt) ? "pointer" : ""; // Thêm biến $current_pointer
?>

    <?php if($num != $current_page_mt){?>
        <?php if($num > $current_page_mt-3 && $num < $current_page_mt+3){?>
            <a class="list_page <?=$current_pointer?>" href="?per_page_mt=<?=$item_per_page_mt?>&page_mt=<?=$num?>"><?=$num?>
                <span class="pointer"></span> <!-- Thêm con trỏ vào đây -->
            </a>
        <?php }?>
    <?php } 
    else{?>
        <strong><?=$num?></strong>
    <?php }?>
    
<?php }?>

<!-- Tien len trang sau -->
<?php 
if($current_page_mt < $totalPages_mt -1){
    $next_page_mt = $current_page_mt + 1;
    $next_page_mt = 'Next';
?>
        <a class="list_page end" href="?per_page_mt=<?=$item_per_page_mt?>&page_mt=<?=$next_page_mt?>"><?=$next_page_mt?></a>

<?php }?>

<!-- in ra trang cuoi cung -->

<?php 
if($current_page_mt < $totalPages_mt - 3){
    $end_page_mt = $totalPages_mt;
?>

<a class="list_page" href="?per_page_mt=<?=$item_per_page_mt?>&page_mt=<?=$end_page_mt?>"><?=$end_page_mt?></a>
<?php }?>

<style>

    .list_page{
        border: 1px solid black;
    font-size: 20px;
    /* magin-right: 21px; */
    padding:0 4px;
    text-decoration: none;
    }
    .pointer {
    margin-left: 5px;
    font-size: 16px;
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

