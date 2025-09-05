<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'message', 'is_read', 'is_human'
    ];

    protected $casts = [
        'is_human' => 'boolean',
        'is_read' => 'boolean'
    ];

    // Status constants
    const STATUS_NEW = 'new';
    const STATUS_READ = 'read';
    const STATUS_REPLIED = 'replied';

    // Get status options
    public static function getStatusOptions()
    {
        return [
            self::STATUS_NEW => 'جدید',
            self::STATUS_READ => 'خوانده شده',
            self::STATUS_REPLIED => 'پاسخ داده شده'
        ];
    }

    // Get status text
    public function getStatusTextAttribute()
    {
        $statuses = self::getStatusOptions();

        if ($this->admin_response) {
            return $statuses[self::STATUS_REPLIED];
        } elseif ($this->is_read) {
            return $statuses[self::STATUS_READ];
        } else {
            return $statuses[self::STATUS_NEW];
        }
    }

    // Get status class for styling
    public function getStatusClassAttribute()
    {
        if ($this->admin_response) {
            return 'status-replied';
        } elseif ($this->is_read) {
            return 'status-read';
        } else {
            return 'status-new';
        }
    }
}
