<?php

add_action('admin_init', 'video_meta_boxes', 1);

function video_meta_boxes()
{
  add_meta_box('video-group', 'Additional Info', 'video_meta_box_display', 'video', 'side', 'high');
}

function video_meta_box_display()
{
  global $post;

  $provider = get_post_meta($post->ID, '_video_provider', true);
  $video_id = get_post_meta($post->ID, '_video_id', true);

  wp_nonce_field('video_meta_box_nonce', 'video_meta_box_nonce');

?>
  <table>
    <tr>
      <th><label>Video</label></th>
      <td>
        <table>
          <tr>
            <td>
              <select name='provider'>
                <option value=''>Select a provider</option>
                <option value='youtube' <?php if ($provider == "youtube") {
                                          echo "selected";
                                        } ?>>youTube</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><input type="text" style="width: 145px" placeholder="video id" name="video_id" value="<?php if ($video_id != '') echo esc_attr($video_id); ?>" /></td>
          </tr>
        </table>

      </td>
    </tr>
  </table>
<?php
}

add_action('save_post', 'video_meta_box_save');

function video_meta_box_save($post_id)
{
  if (
    !isset($_POST['video_meta_box_nonce']) ||
    !wp_verify_nonce($_POST['video_meta_box_nonce'], 'video_meta_box_nonce')
  )
    return;

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return;

  if (!current_user_can('edit_post', $post_id))
    return;

  $old_video_provider = get_post_meta($post_id, '_video_provider', true);
  $new_video_provider = (!empty($_POST['provider'])) ? sanitize_text_field(wp_unslash($_POST['provider'])) : '';
  if (!empty($new_video_provider) && $new_video_provider != $old_video_provider)
    update_post_meta($post_id, '_video_provider', $new_video_provider);
  elseif (empty($new_video_provider) && $old_video_provider)
    delete_post_meta($post_id, '_video_provider', $old_video_provider);

  $old_video_id = get_post_meta($post_id, '_video_id', true);
  $new_video_id =  (!empty($_POST['video_id'])) ? sanitize_text_field(wp_unslash($_POST['video_id'])) : '';
  if (!empty($new_video_id) && $new_video_provider != $old_video_id)
    update_post_meta($post_id, '_video_id', $new_video_id);
  elseif (empty($new_video_id) && $old_video_id)
    delete_post_meta($post_id, '_video_id', $old_video_id);
}
?>