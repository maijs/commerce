<?php

namespace Drupal\Tests\commerce_tax\Kernel\Plugin\Commerce\TaxType;

use Drupal\KernelTests\KernelTestBase;

/**
 * @group commerce
 */
class TaxTypePluginInfoAlterTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'commerce_tax',
    'commerce_tax_test',
  ];

  /**
   * Tests tax plugin definition info alter functionality.
   */
  public function testPluginInfoAlter() {
    $tax_type_definitions = \Drupal::service('plugin.manager.commerce_tax_type')->getDefinitions();

    $this->assertEquals('European Union VAT (altered)', $tax_type_definitions['european_union_vat']['label']);
  }

}
