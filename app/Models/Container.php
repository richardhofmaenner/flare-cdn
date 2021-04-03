<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Container
 * @package App\Models
 *
 * @property Integer id
 * @property String name
 * @property Integer userId
 * @property DateTime created_at
 * @property DateTime modified_at
 */
class Container extends Model
{
    use HasFactory;

  /**
   * Returns the User of the Container
   *
   * @return BelongsTo
   */
    public function owner(): BelongsTo
    {
      return $this->belongsTo(User::class);
    }
}
