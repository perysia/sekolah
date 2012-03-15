<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo.ico" >
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.ui.all.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jstyle.js"></script>
<!--        <script type="text/javascript" src="--><?php //echo base_url(); ?><!--js/bootstrap.js"></script>-->

    </head>

    <body>
    <div class="wrap">
        <div class="header">
            <div class="panel_header">
                <ul style="z-index: 2" id="menu_list">
                    <li><a href="<?php echo base_url(); ?>index.php/cpage">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/cprofil">Profil</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/cguru">Guru</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/csiswa">Siswa</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/calumni">Alumni</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/page/cfitur">Fitur</a></li>



                </ul>

<!--                <ul class="nav pills">-->
<!--                    <li class="active"><a href="#">Regular link</a></li>-->
<!--                    <li class="dropdown" id="menu1">-->
<!--                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">-->
<!--                            Dropdown-->
<!--                            <b class="caret"></b>-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li><a href="#">Action</a></li>-->
<!--                            <li><a href="#">Another action</a></li>-->
<!--                            <li><a href="#">Something else here</a></li>-->
<!--                            <li class="divider"></li>-->
<!--                            <li><a href="#">Separated link</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    ...-->
<!--                </ul>-->
<!--                <script type="text/javascript">-->
<!--                    $(function(){-->
<!--                        $('.dropdown-toggle').dropdown();-->
<!--                    });-->
<!--                </script>-->

                <ul id="menu_list_hide">

                    <li>
                        <table style="margin-left: 50px;" id="tab0" >
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=mot">Motto, Visi dan Misi</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sej">Sejarah Singkat</a></td>
                            </tr>

                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sar">Sarana & Prasarana</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=pres">Prestasi</a></td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table style="margin-left: 135px;" id="tab1">
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirG">Direktori Guru</a></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sil">Silabus</a></td>
                            </tr>

                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=kal">Kalender Akademik</a></td>
                            </tr>

                        </table>
                    </li>
                    <li>
                        <table style="margin-left: 225px;" id="tab2">
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirS">Direktori Siswa</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=prest">Prestasi Siswa</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=eks">Ektrakurikuler</a></td>
                        </tr>
                        </table>
                    </li>
                    <li>
                        <table style="margin-left: 310px; " id="tab3">
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirA">Direktori Alumni</a></td>
                        </tr>

                        </table>
                    </li>
                    <li>
                        <table style="margin-left: 400px;" id="tab4">
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=age">Agenda</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=art">Artikel</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=opi">Opini</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=tam">Buku Tamu</a></td>
                        </tr>
                        </table>
                    </li>

                </ul>
                <div class="img_header" style="z-index: 0">

                </div>
            </div>
        </div>

