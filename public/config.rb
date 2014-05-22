# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "sass"
images_dir = "img"
javascripts_dir = "js"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false

preferred_syntax = :sass



module Sass::Script::Functions
  def random(max = Sass::Script::Number.new(100))
    Sass::Script::Number.new(rand(max.value), max.numerator_units, max.denominator_units)
  end
end

def hsla(hue, saturation, lightness, alpha)
  assert_type hue, :Number, :hue
  assert_type saturation, :Number, :saturation
  assert_type lightness, :Number, :lightness
  assert_type alpha, :Number, :alpha

  Sass::Util.check_range('Alpha channel', 0..1, alpha)

  h = hue.value
  s = Sass::Util.check_range('Saturation', 0..100, saturation, '%')
  l = Sass::Util.check_range('Lightness', 0..100, lightness, '%')

  Sass::Script::Value::Color.new(
    :hue => h, :saturation => s, :lightness => l, :alpha => alpha.value)
end