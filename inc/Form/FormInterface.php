<?php
/**
 * Front End Accounts
 *
 * @category    WordPress
 * @package     FrontEndAcounts
 * @since       0.1
 * @author      Christopher Davis <http://christopherdavis.me>
 * @copyright   2013 Christopher Davis
 * @license     http://opensource.org/licenses/MIT MIT
 */

namespace Chrisguitarguy\FrontEndAccounts\Form;

!defined('ABSPATH') && exit;

/**
 * Form are a collection of fields and their associated validations hidden
 * behind an interface.
 *
 * @since 0.1
 */
interface FormInterface
{
    /**
     * Render the form (spit out HTML)
     *
     * @since   0.1
     * @access  public
     * @return  void
     */
    public function render();

    /**
     * Bind data to the form for validation or display.
     *
     * @since   0.1
     * @access  public
     * @param   array $formdata The data to bind
     * @return  void
     */
    public function bind(array $data);

    /**
     * Add a field to the form.
     *
     * @since   0.1
     * @access  public
     * @param   string $field_id The field ID/name
     * @param   array $args The field's display arguments
     * @return  void
     */
    public function addField($field_id, array $args=array());

    /**
     * Remove a field from the form.
     *
     * @since   0.1
     * @access  public
     * @param   string $field_id
     * @return  boolean True if the field was present and remove, false otherwise
     */
    public function removeField($field_id);
}