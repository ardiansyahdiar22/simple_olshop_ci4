<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $register = [
        'username' => [
            'rules' => 'required|is_unique[user.username]'
        ],
        'password' => [
            'rules' => 'required|min_length[5]'
        ],
        'repeatPassword' => [
            'rules' => 'required|matches[password]'
        ]
    ];

    public $register_errors = [
        'username' => [
            'required' => '{field} Harus diisi!',
            'is_unique' => '{field} Sudah terdaftar'
        ],
        'password' => [
            'required' => '{field} Harus diisi!!',
            'min_length' => '{field} Minimal 5 karakter'
        ],
        'repeatPassword' => [
            'required' => '{field} Harus diisi!!',
            'matches' => '{field} Tidak sama dengan password'
        ]
    ];

    public $transaksi = [
        'id_barang' => [
            'rules' => 'required'
        ],
        'id_pembeli' => [
            'rules' => 'required'
        ],
        'jumlah' => [
            'rules' => 'required'
        ],
        'total_harga' => [
            'rules' => 'required'
        ],
        'alamat' => [
            'rules' => 'required'
        ],
        'ongkir' => [
            'rules' => 'required'
        ],
    ];

    public $login = [
        'username' => [
            'rules' => 'required|min_length[5]',
        ],
        'password' => [
            'rules' => 'required',
        ],
    ];

    public $login_errors = [
        'username' => [
            'required' => '{field} Harus diisi',
            'min_length' => '{field} Minimal 5 karakter'
        ],
        'password' => [
            'required' => '{field} Harus diisi'
        ],
    ];

    public $barang = [
        'nama' => [
            'rules' => 'required|min_length[3]'
        ],
        'harga' => [
            'rules' => 'required|is_natural'
        ],
        'stok' => [
            'rules' => 'required|is_natural'
        ],
        'gambar' => [
            'rules' => 'uploaded[gambar]'
        ],
    ];

    public $barang_errors = [
        'nama' => [
            'required' => '{field} Harus diisi!',
            'min_length' => '{field} Harus 3 karakter',
        ],
        'harga' => [
            'required' => '{field} Harus diisi!',
            'is_natural' => '{field} Tidak bileh negatif!',
        ],
        'stok' => [
            'required' => '{field} Harus diisi!',
            'is_natural' => '{field} Tidak bileh negatif!',
        ],
        'gambar' => [
            'uploaded' => '{field} Harus diupload',
        ],
    ];

    public $barangupdate = [
        'nama' => [
            'rules' => 'required|min_length[3]'
        ],
        'harga' => [
            'rules' => 'required|is_natural'
        ],
        'stok' => [
            'rules' => 'required|is_natural'
        ],
    ];

    public $barangupdate_errors = [
        'nama' => [
            'required' => '{field} Harus diisi!',
            'min_length' => '{field} Harus 3 karakter',
        ],
        'harga' => [
            'required' => '{field} Harus diisi!',
            'is_natural' => '{field} Tidak bileh negatif!',
        ],
        'stok' => [
            'required' => '{field} Harus diisi!',
            'is_natural' => '{field} Tidak bileh negatif!',
        ],
    ];
}
