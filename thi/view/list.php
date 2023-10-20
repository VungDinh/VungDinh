<?php
    include_once "../handle/handle.php";
?>
<style>
    table {
        width: 300px;
        border-collapse: collapse;
    }

    tr, td {
        border: 1px solid black;
    }

    #tbl-header {
        background-color: blue;
        color: white;
    }

    tr:hover {
        background-color: antiquewhite;
    }
</style>
<caption>
    <h2>Danh sách thành phố</h2>
    <a href="index.php?page=groups&action=add">Thêm thành phố</a>
</caption>
<div class="row">
    
</div>
<table class="table table-striped table-hover">
    <tr id="tbl-header">
        <td>STT</td>
        <td>Name</td>
        <td>Quốc gia</td>
        <td>Action</td>
    </tr>

    <?php if (count($result) == 0):  ?>
        <tr>
            <td colspan="2">No data</td>
        </tr>
    <?php else:  ?>
    <?php foreach ($result as $key => $group): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $group['name'] ?></td>
            <td><?php echo $group['country'] ?></td>
            <td>
                <a href="index.php?page=groups&action=edit&id=<?php echo $group['id'] ?>">Edit</a>|
                <a href="index.php?page=groups&action=detail&id=<?php echo $group['id'] ?>">Detail</a>|
                <!-- <a href="index.php?page=groups&action=delete&id=<?php echo $group['id'] ?>">Delete</a> -->
                <a href="javascript:void(0);" onclick="xoa(<?php echo $group['id'] ?>)">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php endif ?>
</table>
<script>
    function xoa(id){
        let tmp = confirm("Bạn có chắc chắn muốn xóa không");
        if(tmp){
            location.href = "index.php?page=groups&action=delete&id="+id;
        }
    }
</script>