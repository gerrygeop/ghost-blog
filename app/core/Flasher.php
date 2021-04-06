<?php

class Flasher {
    public static function setFlash($pesan, $aksi, $tipe)
    {
        if ($aksi == 'success') {
            $icon = '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>';
        } else {
            $icon = '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>';
        }

        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $icon,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '
                <div class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center">
                    <div class="w-3/4 md:w-2/5 flex flex-col bg-gray-50 shadow-2xl rounded-lg pl-4 pr-2 py-4">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-xl text-'. $_SESSION['tipe'] .'-600 flex flex-shrink-0 items-center justify-between">
                                '. $_SESSION['aksi'] .'
                                '. $_SESSION['pesan'] .'!
                            </h3>
                            <button class="hover:bg-gray-200 rounded-full p-3 focus:outline-none">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            ';
                
            unset($_SESSION['flash']);
        }
    }
    
}