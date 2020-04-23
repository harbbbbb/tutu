<?php
    if (isset($_POST['submit'])) {
      $dari_mana = $_POST['dari_mana'];
      $ke_mana = $_POST['ke_mana'];
      $jml_tiket = $_POST['jml_tiket'];
      $harga_tiket = 0;

      if (($dari_mana != "") && ($ke_mana != "") && ($jml_tiket != "")) {
        if ($jml_tiket != 0) {
          // ------------------------------------------------------------------
          if (($dari_mana == "jakarta") && ($ke_mana == "jakarta")) {
              echo '<div class="alert alert-danger" role="alert"> Tidak Boleh sama ! </div>';

          } else if (($dari_mana == "bandung") && ($ke_mana == "bandung")) {
              echo '<div class="alert alert-danger" role="alert"> Tidak Boleh sama ! </div>';

          } else if (($dari_mana == "yogyakarta") && ($ke_mana == "yogyakarta")) {
              echo '<div class="alert alert-danger" role="alert"> Tidak Boleh sama ! </div>';

          } else if (($dari_mana == "surabaya") && ($ke_mana == "surabaya")) {
              echo '<div class="alert alert-danger" role="alert"> Tidak Boleh sama ! </div>';

          }

            else if (($dari_mana == "jakarta") && ($ke_mana == "bandung")) {
              $harga_tiket = 90000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "jakarta") && ($ke_mana == "yogyakarta")) {
              $harga_tiket = 200000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "jakarta") && ($ke_mana == "surabaya")) {
              $harga_tiket = 250000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "jakarta") && ($ke_mana == "")){
              echo '<div class="alert alert-danger" role="alert">
                      Pilih dulu, Anda mau kemana ?
                    </div>';
            }

            else if (($dari_mana == "bandung") && ($ke_mana == "jakarta")) {
              $harga_tiket = 90000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "bandung") && ($ke_mana == "yogyakarta")) {
              $harga_tiket = 150000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "bandung") && ($ke_mana == "surabaya")) {
              $harga_tiket = 170000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "bandung") && ($ke_mana == "")){
              echo '<div class="alert alert-danger" role="alert">
                      Pilih dulu, Anda mau kemana ?
                    </div>';
            }

            else if (($dari_mana == "yogyakarta") && ($ke_mana == "jakarta")) {
              $harga_tiket = 200000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "yogyakarta") && ($ke_mana == "bandung")) {
              $harga_tiket = 150000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "yogyakarta") && ($ke_mana == "surabaya")) {
              $harga_tiket = 140000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "yogyakarta") && ($ke_mana == "")){
              echo '<div class="alert alert-danger" role="alert">
                      Pilih dulu, Anda mau kemana ?
                    </div>';
            }

            else if (($dari_mana == "surabaya") && ($ke_mana == "jakarta")) {
              $harga_tiket = 250000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "surabaya") && ($ke_mana == "bandung")) {
              $harga_tiket = 170000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "surabaya") && ($ke_mana == "yogyakarta")) {
              $harga_tiket = 140000;
              $total_harga = $harga_tiket * $jml_tiket;
              include "output_tiket.php";

            } else if (($dari_mana == "surabaya") && ($ke_mana == "")){
              echo '<div class="alert alert-danger" role="alert">
                      Pilih dulu, Anda mau kemana ?
                    </div>';
            }
        } else {
          echo '<div class="alert alert-danger" role="alert">
                  Pesan Minimal 1 Tiket !
                </div>';
        }
      } else {
          echo '<div class="alert alert-danger" role="alert">
                  Isi dulu yak !
                </div>';
      }
    }
  ?>
