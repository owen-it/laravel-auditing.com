---
sidebarDepth: 2
---

<div class="flex justify-center my-10">
  <img src="/logo.svg" alt="Laravel Auditing logo" class="max-h-[256px]">
</div>

# Why Laravel Auditing?

## Overview

The Laravel Auditing package is a robust tool for Laravel developers who need to ensure that the data in their applications is secure and running smoothly. It offers detailed auditing capabilities for Eloquent models, enabling developers to keep track of every change that occurs in their models, including the creation, modification, and deletion of records, as well as any changes to their attributes.

The package comes with a number of useful features that make it easy to customize and control the auditing process. For instance, it includes an Auditor class that allows developers to audit and clear audit records and Modifiers that can be used to modify attributes before they are audited. The package also offers various presentation options to access metadata and modified data in different ways. Resolvers provide a convenient way to obtain the basic data for audit, while drivers handle the storage and pruning of audit records.

The Laravel Auditing package further provides Transformation functionality, enabling developers to transform audit data before it is stored, useful for reformatting data for compatibility with another system. Tags are another helpful feature of the package, which enable developers to mark audit logs and filter and sort them, especially in large applications with many audit records.

Finally, the package includes an Events system that offers a simple observer pattern implementation, allowing developers to subscribe and listen to audit events. This feature can be particularly useful for triggering custom actions or notifications based on specific audit events. Overall, the Laravel Auditing package is an essential tool for developers who require strict control over the data in their applications.


## Why should I use Laravel Auditing?

There are several reasons why you might want to use Laravel Auditing in your application:

- **Auditing**: Laravel Auditing allows you to easily track changes to your Eloquent models. This can be useful for auditing purposes, as well as for detecting potential security breaches or other issues.

- **Customizable**: The package is highly customizable, with a wide range of features that allow you to control the auditing process to suit your specific needs. For example, you can modify attributes before they are audited, and transform audit data to fit your requirements.

- **Flexible storage**: The package supports multiple storage options, including database, Elasticsearch, and MongoDB. This means you can choose the storage option that best suits your needs and infrastructure.

- **Efficient**: Laravel Auditing is designed to be efficient and performant, with minimal impact on your application's performance.

- **Easy to use**: The package is easy to install and configure, with a simple API that makes it easy to audit your models with just a few lines of code.

- **Notifications**: The Events system in Laravel Auditing allows you to trigger custom actions or notifications based on specific audit events. This can be particularly useful for keeping track of critical changes or responding to potential security issues.

- **Scalable**: With the ability to mark and filter audit logs, Laravel Auditing is well-suited for large applications with many audit records. Additionally, its Events system provides a simple observer pattern implementation, allowing you to subscribe and listen to audit events, which can be useful for triggering custom actions or notifications based on specific audit events.

## Features

Here are some highlights of our favorite features:

### Auditor

The Auditor class is responsible for auditing and clearing Audit records.

### Modifiers

Allows you to modify attributes before being audited. Sensitive data can be omitted or modified using this feature.

### Presentation

The metadata and modified data can be accessed in several ways.

### Resolvers

Resolvers provide a convenient way to get the basic data for audit.

### Drivers

Besides storing model attribute changes, drivers also handle pruning when an audit threshold is set.

### Transformation

If needed, the Audit data can be transformed before being stored.

### Tags

Tags mark audit logs and are very useful for filtering.

### Events

Auditing's events provide a simple observer pattern implementation, allowing you to subscribe and listen to the audit events.

### Transition

Ability use an Audit record to transition between the states of an Auditable model.

## Meet the team

<MeetTeam class="mb-24" />
