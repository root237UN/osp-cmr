
<style>
    #dropmenu1 a {
        text-decoration: none;
    }

    #dropmenu1 nav {
        font-family: monospace;
    }

    #dropmenu1 ul {
        /*background: #f2f2f2;*/
        list-style: none;
        margin: 0;
        padding-left: 0;
    }

    #dropmenu1 li {
        display: block;
        float: left;
        padding: 1rem;
        position: relative;
        text-decoration: none;
        transition-duration: 0.5s;
    }

    #dropmenu1 li a {
    }

    #dropmenu1 li:hover,
    #dropmenu1 li:focus-within {
        background: #f2f2f2;
        cursor: pointer;
    }

    #dropmenu1 li:focus-within a {
        outline: none;
    }

    #dropmenu1 ul li ul {
        background: #f2f2f2;
        visibility: hidden;
        opacity: 0;
        min-width: 15rem;
        position: absolute;
        transition: all 0.5s ease;
        margin-top: 1rem;
        left: 0;
        display: none;
    }

    #dropmenu1 ul li:hover>ul,
    #dropmenu1 ul li:focus-within>ul,
    #dropmenu1 ul li ul:hover,
    #dropmenu1 ul li ul:focus {
        visibility: visible;
        opacity: 1;
        display: block;
    }

    #dropmenu1 ul li ul li {
        clear: both;
        width: 85%;
    }
    #dropmenu1 ul li ul li:hover a {
        border-bottom: 2px solid #000;
    }
    #dropmenu1 ul li ul li span {
        font-size: 12px;
    }
</style>


<nav class="nav-bar navbar navbar-expand-lg nav-top" id="dropmenu1">

    <a class="col-md-1 title-nav"><span style="font-size: 17px;color: #38c172; font-weight: 500;">Structure</span></a>

    <ul class="col-md-5 list-options navbar-nav">
        <li class="dropdown nav-bar-item">
            <a><span>Ministere</span></a>
            <i class="fas fa-chevron-down"></i>
        </li>
        <li class="dropdown nav-bar-item">
            <a><span>Programmes</span></a>
            <i class="fas fa-chevron-down"></i>
        </li>
        <li class="dropdown nav-bar-item">
            <a><span>Localites</span></a>
            <i class="fas fa-chevron-down"></i>
        </li>
        <li class="dropdown nav-bar-item">
            <a><span>Aide</span></a>
            <i class="fas fa-chevron-down"></i>
        </li>
    </ul>
    <br>
</nav>
