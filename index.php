<?php

    $json = file_get_contents(dirname(__FILE__).'/sideka.json');
    $sideka_json = json_decode($json);
    $sideka_version = $sideka_json->version;
    $desa_count = $sideka_json->desa;
?>
<?php get_header(); ?>
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid col-md-12">


            <div class="left col-md-4 col-md-offset-2 col-xs-12">

                <h1>Bangun desa dengan Sideka bersama <a href='http://monitor.sideka.id/'><?php echo $desa_count; ?></a> desa lain</h1>
                <h4>Bebas, gratis, mudah.</h4>
                
                <p class="unduh">Unduh untuk:</p>
                <div class="links">
                    <div class="windows ">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/logo_microsoft.png">
                        <h5>Windows</h5>
                        <div class="windowslink">
                            <a href="https://github.com/ghk/sideka-electron/releases/download/v<?php echo $sideka_version; ?>/Sideka-Setup-<?php echo $sideka_version; ?>.exe">Windows 7, 8, 10</a>
                        </div>
                    </div>

                    <div class="linux ">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/tux.png">
                        <h5>Linux</h5>
                        <div class="linuxlink">
                            <p>Linux 32bit : <a href="https://github.com/ghk/sideka-electron/releases/download/v<?php echo $sideka_version; ?>/Sideka-<?php echo $sideka_version; ?>-i386.AppImage">AppImage</a> |  <a href="https://github.com/ghk/sideka-electron/releases/download/v<?php echo $sideka_version; ?>/Sideka_<?php echo $sideka_version; ?>_i386.deb">.deb</a> |  <a href="https://github.com/ghk/sideka-electron/releases/download/v<?php echo $sideka_version; ?>/Sideka-<?php echo $sideka_version; ?>.i686.rpm">.rpm</a></p>
                            <p>Linux 64bit : <a href="https://github.com/ghk/sideka-electron/releases/download/v<?php echo $sideka_version; ?>/Sideka-<?php echo $sideka_version; ?>-x86_64.AppImage">AppImage</a> |  <a href="https://github.com/ghk/sideka-electron/releases/download/v<?php echo $sideka_version; ?>/Sideka_<?php echo $sideka_version; ?>_amd64.deb">.deb</a> |  <a href="https://github.com/ghk/sideka-electron/releases/download/v<?php echo $sideka_version; ?>/Sideka-<?php echo $sideka_version; ?>.x86_64.rpm">.rpm</a></p>
                        </div>
                    </div>


                    <div class="macos ">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/logo_mac.png">
                        <h5>Mac OS</h5>
                        <div class="macoslink">
                            <a href="https://github.com/ghk/sideka-electron/releases/download/v<?php echo $sideka_version; ?>/Sideka-<?php echo $sideka_version; ?>-mac.zip">MacOS 10.9+</a>
                        </div>
                    </div>
                </div>



            </div>

            <div class="right col-md-6">

                <img src="<?php echo get_bloginfo('template_directory'); ?>/res/display.png">

            </div>



        </div>
    </section>

    <section id="features">
        <div class="container-fluid">
           <div class="features-title">
                    <h2>Fitur Kunci</h2>
                </div>
            <div class="feature interface col-md-10 col-md-offset-1">
                
                <div class="feature-image col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/res/antarmuka.png">
                </div>
                <div class="feature-content col-md-6">
                    <h3>Antarmuka yang Mudah dan Cepat</h3>
                    <p>Dengan antarmuka spreadsheet yang seragam, pemerintah desa dapat dengan cepat mengelola data kependudukan, data keuangan, dan data kemiskinannya. Penyaringan, pengurutan, dan pencarian data dapat dilakukan dengan beberapa klik saja.</p>
                </div>
            </div>
            <div class="feature optimum col-md-10 col-md-offset-1">
                <div class="feature-content col-md-6">
                    <h3>Pelayanan Publik yang Optimal</h3>
                    <p>Dengan fitur surat-menyurat yang terintegrasi dengan data-data desa maupun supradesa. Pemerintah desa dapat melayani kebutuhan masyarakat desa dalam pembuatan surat keterangan dengan optimal. Surat yang dapat dengan mudah dibuat dengan Sideka antara lain, surat keterangan domisili, surat keterangan kepemilikan tanah, surat keterangan tidak mampu, dan sebagainya.
                    </p>
                </div>
                <div class="feature-image col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/res/optimal.png">
                </div>
            </div>
            <div class="feature optimum-mobile col-md-10 col-md-offset-1">
                <div class="feature-image col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/res/optimal.png">
                </div>
                <div class="feature-content col-md-6">
                    <h3>Pelayanan Publik yang Optimal</h3>
                    <p>Dengan fitur surat-menyurat yang terintegrasi dengan data-data desa maupun supradesa. Pemerintah desa dapat melayani kebutuhan masyarakat desa dalam pembuatan surat keterangan dengan optimal. Surat yang dapat dengan mudah dibuat dengan Sideka antara lain, surat keterangan domisili, surat keterangan kepemilikan tanah, surat keterangan tidak mampu, dan sebagainya.
                    </p>
                </div>

            </div>
            <div class="feature cloud col-md-10 col-md-offset-1">
                <div class="feature-image col-md-6">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/res/cloud2.png">
                </div>
                <div class="feature-content col-md-6">
                    <h3>Data di Cloud dengan Sinkronisasi Offline-Online Pintar</h3>
                    <p>Sideka dapat digunakan di pelosok desa yang tidak selalu mempunyai koneksi internet. Sideka akan tetap dapat digunakan di saat tidak ada koneksi internet, dan setiap perubahan akan disinkronisasi ke cloud ketika terkoneksi kembali ke internet.</p>
                </div>
            </div>
        </div>
    </section>
	    
	<!-- Constitution -->

    <section id="constitution">
        <div class="container-fluid">
            <div class="col-md-12">
                <h2>Pasal 86 UU no. 6 Tahun 2014</h2>
				<h4>~ Undang-Undang Tentang Desa pasal tentang Sistem Informasi Pembangunan Desa dan Pembangunan Kawasan Perdesaan ~</h4>
                <div class="cons-content">
                    <ol>
                        <li>Desa berhak mendapatkan akses informasi melalui sistem informasi Desa yang dikembangkan oleh Pemerintah Daerah Kabupaten/Kota.<br></li>
                        <li>Pemerintah dan Pemerintah Daerah wajib mengembangkan sistem informasi Desa dan pembangunan Kawasan Perdesaan</li>
                        <div id="morepasal">
                            <li>Sistem informasi Desa sebagaimana dimaksud pada ayat (2) meliputi fasilitas perangkat keras dan perangkat lunak, jaringan, serta sumber daya manusia.</li>
                            <li>Sistem informasi Desa sebagaimana dimaksud pada ayat (2) meliputi data Desa, data Pembangunan Desa, Kawasan Perdesaan, serta informasi lain yang berkaitan dengan Pembangunan Desa dan pembangunan Kawasan Perdesaan.</li>
                            <li>Sistem informasi Desa sebagaimana dimaksud pada ayat (2) dikelola oleh Pemerintah Desa dan dapat diakses oleh masyarakat Desa dan semua pemangku kepentingan.</li>
                            <li>Pemerintah Daerah Kabuten/Kota menyediakan informasi perencanaan pembangunan Kabupaten/Kota untuk Desa.</li>
                        </div>
                        <button data-text-swap="Sembunyikan &#x25B4;" onclick="hideshow()">Lihat semua <span class="caret"></span></button>
                    </ol>
                </div>
            </div>
        </div>


    </section>

	<script>
    var button = document.querySelectorAll("button")[0];
    button.addEventListener('click', function() {
        if (button.getAttribute("data-text-swap") == button.innerHTML) {
            button.innerHTML = button.getAttribute("data-text-original");
        } else {
            button.setAttribute("data-text-original", button.innerHTML);
            button.innerHTML = button.getAttribute("data-text-swap");
        }
    }, false);

    function hideshow() {
        var x = document.getElementById("morepasal");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
	</script>


    <!-- Supported -->

    <section id="support">
        <div class="container-fluid">
            <div class="support-title">
                <h2>Sebuah kerja sama dari:</h2>
            </div>
            <div class="support">
                <div class="supporter">
                    <a href="http://bp3ti.kominfo.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/bp3ti.png">
                    </a>
                </div>
                <div class="supporter">
                    <a href="http://binapemdes.kemendagri.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/kemendagri.png">
                    </a>
                </div>
                <div class="supporter">
                    <a href="http://kemendesa.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/kemendesa.png">
                    </a>
                </div>
                <div class="supporter">
                    <a href="http://kominfo.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/kemkominfo.png">
                    </a>
                </div>
                <div class="supporter">
                    <a href="http://bpkp.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/bpkp.jpg">
                    </a>
                </div>
                <div class="supporter">
                    <a href="http://ksp.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/ksp.png">
                    </a>
                </div>
                <div class="supporter">
                    <a href="http://bp2dk.id">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/res/bp2dk.png">
		    </a>
                </div>
                <div class="supporter">
                    <a href="http://microvac.co.id">
                    <img style="margin-left: -20px;" src="<?php echo get_bloginfo('template_directory'); ?>/res/microvac.png">
	            </a>
                </div>
            </div>
            <div class="support-mobile col-xs-12">
			    <div class="supporter-mobile col-xs-6">
                    <a href="http://bp3ti.kominfo.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/bp3ti.png">
                    </a>
                </div>
                <div class="supporter-mobile col-xs-6">
                    <a href="http://binapemdes.kemendagri.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/kemendagri.png">
                    </a>
                </div>
                <div class="supporter-mobile col-xs-6">
                    <a href="http://kemendesa.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/kemendesa.png">
                    </a>
                </div>
                <div class="supporter-mobile col-xs-6">
                    <a href="http://kominfo.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/kemkominfo.png">
                    </a>
                </div>
                <div class="supporter-mobile col-xs-6">
                    <a href="http://bpkp.go.id">
                        <img style="width: 100px;margin-top: 10px;" src="<?php echo get_bloginfo('template_directory'); ?>/res/bpkp.jpg">
                    </a>
                </div>
                <div class="supporter-mobile col-xs-6">
                    <a href="http://ksp.go.id">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/res/ksp.png">
                    </a>
                </div>
                <div class="supporter-mobile col-xs-6">
                    <a href="http://bp2dk.id">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/res/bp2dk.png">
	            </a>
                </div>
                <div class="supporter-mobile col-xs-6">
                    <a href="http://microvac.co.id">
                    <img style="width: 100px; margin-top: 25px;" src="<?php echo get_bloginfo('template_directory'); ?>/res/microvac.png">
	            </a>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
