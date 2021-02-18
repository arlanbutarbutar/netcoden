<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['role_idC'])){
      // coder
      if($_SESSION['role_idC']==1){
        if(isset($_SESSION['id_coder'])){
          if(isset($_SESSION['is_activeC'])){
            if(isset($_SESSION['id_securityC'])){
              if(isset($_SESSION['id_aksesC'])){
                header("Location: ../view/coder/home");
                exit;
              }
            }
          } 
        }
        // employee
      }else if($_SESSION['role_idC']==2){
        if(isset($_SESSION['id_coder'])){
          if(isset($_SESSION['is_activeC'])){
            if(isset($_SESSION['id_securityC'])){
              if(isset($_SESSION['id_aksesC'])){
                header("Location: ../view/coder/homeEm");
                exit;
              }
            }
          } 
        }
      }
    }
    // users
    if(isset($_SESSION['role_id'])){
      if($_SESSION['role_id']==3){
        if(isset($_SESSION['id_user'])){
          if(isset($_SESSION['username'])){
            if(isset($_SESSION['role_id'])){
              if(isset($_SESSION['is_active'])){
                if(isset($_SESSION['id_security'])){
                  if(isset($_SESSION['id_pay'])){
                    if(isset($_SESSION['id_akses'])){
                      header("Location: ../view/app/home");
                      exit;
                    }
                  }
                }
              }
            }
          }
        }
      }
    }