<?php
/**
 * Created by PhpStorm.
 * User: ZYQ
 * Date: 2019-05-11
 * Time: 20:24
 */
//$search_content = $_POST['search_content'];
require_once ('../controller/search_result.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script_joyce.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="css/css_joyce.css">
</head>
<body>
<div class="individual_content">
    <div class="individual_second_layer">
        <div id="message_div">
            <p class="explain" style="color: #742e68; font-size: 20px"><?php echo $search_message ?></p>
        </div>
        <div id="filter_div">
            <select id="filter_content" class="form-control">
                <option value="1">All</option>
                <option value="2">Only facility</option>
                <option value="3">Only event</option>
            </select>
            <button class="btn btn-primary" onclick="filter_search()">Apply</button>
        </div>
        <!--facility list-->
        <div class="list_div" id="search_facility">
            <div class="list-group" id="search_list_f">
                <?php
                for ($i=0; $i<count($facility_result_set); $i++ ){
                    if(substr($facility_result_set[$i]['description'],0,120)){
                        $description = substr($facility_result_set[$i]['description'],0,120);
                    }
                    else{
                        $description = $facility_result_set[$i]['description'];
                    }
                    echo "
                <div>
                    <a href='#' class='list-group-item list-group-item-action'>
                        <div class='icon_div'><img src='image/icon_F.png' class='icon_search'></div>
                        <div class='list_inner_content_div'>
                            <div class='d-flex w-100 justify-content-between'>
                                <h5 class='mb-1'>". $facility_result_set[$i]['name'] ."</h5>
                            </div>
                            <p class='mb-1'>". $description ."</p>
                            <small class='text-muted'>Facility ID : ". $facility_result_set[$i]['id'] ."</small>
                        </div>
                        <div id='id4' style='clear:both'></div>
                    </a>
                </div>";

                }
                ?>
            </div>
        </div>
        <div class="list_div" id="search_event">
            <div class="list-group" id="search_list_f">
                <?php
                for ($i=0; $i<count($event_result_set); $i++ ){
                    if(substr($event_result_set[$i]['content'],0,120)){
                        $description = substr($event_result_set[$i]['content'],0,120);
                    }
                    else{
                        $description = $event_result_set[$i]['content'];
                    }
                    echo "
                        <div>
                            <a href='#' class='list-group-item list-group-item-action'>
                                <div class='icon_div'><img src='image/icon_E.png' class='icon_search'></div>
                                <div class='list_inner_content_div'>
                                    <div class='d-flex w-100 justify-content-between'>
                                        <h5 class='mb-1'>". $event_result_set[$i]['title'] ."</h5>
                                    </div>
                                    <p class='mb-1'>". $description ."</p>
                                    <small class='text-muted'>Event ID : ". $event_result_set[$i]['id'] ."</small>
                                </div>
                                <div id='id4' style='clear:both'></div>
                            </a>
                        </div>";

                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

