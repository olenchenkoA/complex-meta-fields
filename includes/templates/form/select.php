<label>
  {{field.name}}<br />
  
  <select name="cmf[{{fieldset.slug}}][{{$parent.$parent.$index}}][{{field.slug}}]">
    <option ng-repeat="opt in field.options" ng-selected="field.value === opt.label" value="{{opt.label}}">{{opt.label}}</option>
  </select>
  
</label>