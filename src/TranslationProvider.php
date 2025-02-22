<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FSi\Component\Translatable;

interface TranslationProvider
{
    public function createForEntityAndLocale(object $entity, string $locale): object;
    public function findForEntityAndLocale(object $entity, string $locale): ?object;
    /**
     * @param object $entity
     * @return array<object>
     */
    public function findAllForEntity(object $entity): array;
}
