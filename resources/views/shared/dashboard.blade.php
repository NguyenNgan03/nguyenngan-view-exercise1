<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .menu-item:hover {
        background-color: gray;
    }
    .menu-item:hover > a {
        color: white;
    }
    .menu-link{
        color: black
    }
    .figureItem{
        height: 120px;
        boredr: none;
        border-radius: 10px;
        color: white;
    }


</style>
<div>
    <div class="d-flex gap-3 header m-3 justify-content-between">
        <div class="logo px-5">
            <img class='' style='width: 80px' src="https://cdn.mos.cms.futurecdn.net/8stH5QZQriowRdziYpK6SY-1200-80.jpg" alt="">
        </div>
        <div class="toolBar d-flex gap-3 align-items-center">
            <div class="searchBar">
                <input class='border-0 p-3' style='outline: none; background-color: #f3f3f3; border-radius: 30px; width: 900px' type="text" placeholder='Search here ...'>
            </div>
            <div class="notoify">
                <i class="bi bi-bell fs-4 p-3"></i>
            </div>
            <div class="messeage">
                <i class="bi bi-chat fs-4 p-3"></i>
            </div>
            <div class="avatar" >
                <img class='mx-2' style='width: 50px; border-radius: 50%' src="https://sm.ign.com/ign_nordic/cover/a/avatar-gen/avatar-generations_prsz.jpg" alt="avatar người dùng">
            </div>
        </div>
    </div>
    <div class="row content">
        <div class="leftColumn col-2">
            <div class="sideMenu">
                <ul class="menu p-0">
                    <li class="menu-item px-5 py-3" style='list-style-type: none; '>
                        <a class="menu-link" style='text-decoration: none;  font-weight: bold' href="">Home</a>
                    </li>
                    <li class="menu-item px-5 py-3" style='list-style-type: none; '>
                        <a class="menu-link" style='text-decoration: none;  font-weight: bold' href="">About</a>
                    </li>
                    <li class="menu-item px-5 py-3" style='list-style-type: none; '>
                        <a class="menu-link" style='text-decoration: none;  font-weight: bold' href="">Contact</a>
                    </li>
                    <li class="menu-item px-5 py-3" style='list-style-type: none; '>
                        <a class="menu-link" style='text-decoration: none;  font-weight: bold' href="">About</a>
                    </li>
                    <li class="menu-item px-5 py-3" style='list-style-type: none; '>
                        <a class="menu-link" style='text-decoration: none;  font-weight: bold' href="">Contact</a>
                    </li>
                    <li class="menu-item px-5 py-3" style='list-style-type: none; '>
                        <a class="menu-link" style='text-decoration: none;  font-weight: bold' href="">About</a>
                    </li>
                    <li class="menu-item px-5 py-3" style='list-style-type: none; '>
                        <a class="menu-link" style='text-decoration: none;  font-weight: bold' href="">Contact</a>
                    </li>   
                </ul>
            </div>
        </div>
        <div class="rightColumn col-9">
            <div class="figure">
                <span class='d-flex gap-2'>
                    <div class="figureItem p-2 m-2 ms-0" style='width: 500px; background-color: #7b7be9' >
                        <div class="tinyTitle px-2 ms-2">Total Income</div>
                        <div class="amount fs-3 px-2 ms-2">$ 579,000</div>
                        <div class="ratios px-2 pt-1 ms-2">Saved 25%</div>
                    </div>
                    <div class="figureItem p-2 m-2 ms-0" style='width: 500px; background-color: #e9007980' >
                        <div class="tinyTitle px-2">Total Income</div>
                        <div class="amount fs-3 px-2">$ 579,000</div>
                        <div class="ratios px-2 pt-1">Saved 25%</div>
                    </div>
                </span>
                <span class='d-flex gap-2'>
                <div class="figureItem p-2 m-2 ms-0" style='width: 500px; background-color: #28bf00b0' >
                        <div class="tinyTitle px-2">Total Income</div>
                        <div class="amount fs-3 px-2">$ 579,000</div>
                        <div class="ratios px-2 pt-1">Saved 25%</div>
                    </div>
                    <div class="figureItem p-2 m-2 ms-0" style='width: 500px; background-color: #f3a029de' >
                        <div class="tinyTitle px-2">Total Income</div>
                        <div class="amount fs-3 px-2">$ 579,000</div>
                        <div class="ratios px-2 pt-1">Saved 25%</div>
                    </div>
                </span>

            </div>
            <div class="graph gap-4 d-flex justify-content-center">
                <div class="graphItem">
<img style='width:400px' src="data:image/png;base64,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" alt="">
                </div>
                <div class="graphItem">
                    <img style='width:400px' src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPcoY96jciEN25PIReeYcD9HGkLqOQIwPQAA&s" alt="">
                </div>
            </div>
        </div>
    </div>

</div>